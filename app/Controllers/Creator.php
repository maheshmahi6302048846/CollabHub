<?php

namespace App\Controllers;

use App\Models\CreatorModel;
use App\Models\CampaignModel;
use App\Models\CampaignRequestModel;
use App\Models\MessageModel;

class Creator extends BaseController
{
    private CreatorModel $creatorModel;
    private CampaignModel $campaignModel;
    private CampaignRequestModel $requestModel;
    private MessageModel $messageModel;

    public function __construct()
    {
        $this->creatorModel  = new CreatorModel();
        $this->campaignModel = new CampaignModel();
        $this->requestModel  = new CampaignRequestModel();
        $this->messageModel  = new MessageModel();
    }

    private function getLoggedInCreator()
    {
        $userId  = session()->get('user_id');
        $creator = $this->creatorModel->getByUserId($userId);

        if (!$creator) {
            $userName = session()->get('name') ?? 'Creator';
            $handle   = '@' . strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $userName));
            $this->creatorModel->insert([
                'user_id'   => $userId,
                'full_name' => $userName,
                'handle'    => $handle,
            ]);
            $creator = $this->creatorModel->getByUserId($userId);
        }

        return $creator;
    }

    public function onboarding()
    {
        $creator = $this->getLoggedInCreator();
        return view('creator/onboarding', [
            'title'   => 'Creator Onboarding | CollabHub',
            'creator' => $creator,
        ]);
    }

    public function saveOnboarding()
    {
        $creator = $this->getLoggedInCreator();
        $data = [
            'niche'           => $this->request->getPost('niche'),
            'followers_count' => (int) $this->request->getPost('followers_count'),
            'bio'             => $this->request->getPost('bio'),
        ];

        $this->creatorModel->update($creator['id'], $data);
        return redirect()->to(base_url('creator/dashboard'))->with('success', 'Onboarding completed! Welcome to your creator portal.');
    }

    public function dashboard(): string
    {
        $creator   = $this->getLoggedInCreator();
        $campaigns = $this->campaignModel->getActiveCampaigns();

        return view('creator/dashboard', [
            'title'     => 'Creator Dashboard | CollabHub',
            'creator'   => $creator,
            'campaigns' => $campaigns,
        ]);
    }

    public function profile(): string
    {
        $creator = $this->getLoggedInCreator();
        return view('creator/profile', [
            'title'   => 'Creator Profile | CollabHub',
            'creator' => $creator,
        ]);
    }

    public function updateProfile()
    {
        $creator = $this->getLoggedInCreator();
        $rules   = [
            'full_name'       => 'required|min_length[3]|max_length[100]',
            'handle'          => 'required|min_length[2]|max_length[100]',
            'niche'           => 'permit_empty|max_length[100]',
            'followers_count' => 'permit_empty|integer',
            'bio'             => 'permit_empty',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $fullName       = $this->request->getPost('full_name');
        $handle         = $this->request->getPost('handle');
        $niche          = $this->request->getPost('niche');
        $followersCount = (int) $this->request->getPost('followers_count');
        $bio            = $this->request->getPost('bio');

        if (!str_starts_with($handle, '@')) {
            $handle = '@' . $handle;
        }

        $this->creatorModel->update($creator['id'], [
            'full_name'       => $fullName,
            'handle'          => $handle,
            'niche'           => $niche,
            'followers_count' => $followersCount,
            'bio'             => $bio,
        ]);

        session()->set('name', $fullName);

        return redirect()->to(base_url('creator/profile'))->with('success', 'Your profile details have been updated!');
    }

    public function discover(): string
    {
        $creator   = $this->getLoggedInCreator();
        $category  = $this->request->getGet('category');
        $campaigns = $this->campaignModel->getActiveCampaigns($category);

        return view('creator/discover', [
            'title'            => 'Discover Opportunities | CollabHub',
            'creator'          => $creator,
            'campaigns'        => $campaigns,
            'selectedCategory' => $category ?? 'all',
        ]);
    }

    public function opportunityDetail($id = 1): string
    {
        $creator  = $this->getLoggedInCreator();
        $campaign = $this->campaignModel->getCampaignWithBrand($id);

        return view('creator/opportunity_detail', [
            'title'    => 'Opportunity Details | CollabHub',
            'id'       => $id,
            'creator'  => $creator,
            'campaign' => $campaign,
        ]);
    }

    public function applyCampaign()
    {
        $creator    = $this->getLoggedInCreator();
        $campaignId = (int) $this->request->getPost('campaign_id');
        $proposal   = $this->request->getPost('proposal');

        $existing = $this->requestModel->where([
            'campaign_id' => $campaignId,
            'creator_id'  => $creator['id'],
        ])->first();

        if ($existing) {
            return redirect()->back()->with('error', 'You have already submitted a proposal for this campaign.');
        }

        $this->requestModel->insert([
            'campaign_id' => $campaignId,
            'creator_id'  => $creator['id'],
            'proposal'    => $proposal,
            'type'        => 'Paid/Product',
            'status'      => 'pending',
        ]);

        return redirect()->to(base_url('creator/requests'))->with('success', 'Your application pitch has been submitted successfully!');
    }

    public function requests(): string
    {
        $creator  = $this->getLoggedInCreator();
        $requests = $this->requestModel->getRequestsForCreator($creator['id']);

        return view('creator/requests', [
            'title'    => 'My Requests | CollabHub',
            'creator'  => $creator,
            'requests' => $requests,
        ]);
    }

    public function campaigns(): string
    {
        return view('creator/campaigns', ['title' => 'My Campaigns | CollabHub']);
    }

    public function campaignDetail($id = 1): string
    {
        return view('creator/campaign_detail', ['title' => 'Campaign Details | CollabHub', 'id' => $id]);
    }

    public function messages(): string
    {
        $creator      = $this->getLoggedInCreator();
        $userId       = session()->get('user_id');
        $receiverId   = (int) ($this->request->getGet('with') ?? 3); // Default brand user id
        $chatMessages = $this->messageModel->getConversation($userId, $receiverId);

        return view('creator/messages', [
            'title'        => 'Messages | CollabHub',
            'creator'      => $creator,
            'chatMessages' => $chatMessages,
            'receiverId'   => $receiverId,
        ]);
    }

    public function sendMessage()
    {
        $senderId   = session()->get('user_id');
        $receiverId = (int) $this->request->getPost('receiver_id');
        $messageText = $this->request->getPost('message');

        if (!empty($messageText)) {
            $this->messageModel->insert([
                'sender_id'   => $senderId,
                'receiver_id' => $receiverId,
                'message'     => $messageText,
                'is_read'     => 0,
                'created_at'  => date('Y-m-d H:i:s'),
            ]);
        }

        return redirect()->to(base_url('creator/messages?with=' . $receiverId));
    }

    public function earnings(): string
    {
        return view('creator/earnings', ['title' => 'Earnings & Financials | CollabHub']);
    }

    public function settings(): string
    {
        $creator = $this->getLoggedInCreator();
        return view('creator/settings', [
            'title'   => 'Account Settings | CollabHub',
            'creator' => $creator,
        ]);
    }
}

