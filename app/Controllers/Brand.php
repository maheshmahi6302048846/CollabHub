<?php

namespace App\Controllers;

use App\Models\BrandModel;
use App\Models\CampaignModel;
use App\Models\CampaignRequestModel;
use App\Models\MessageModel;

class Brand extends BaseController
{
    private BrandModel $brandModel;
    private CampaignModel $campaignModel;
    private CampaignRequestModel $requestModel;
    private MessageModel $messageModel;

    public function __construct()
    {
        $this->brandModel    = new BrandModel();
        $this->campaignModel = new CampaignModel();
        $this->requestModel  = new CampaignRequestModel();
        $this->messageModel  = new MessageModel();
    }

    private function getLoggedInBrand()
    {
        $userId = session()->get('user_id');
        $brand  = $this->brandModel->getByUserId($userId);

        if (!$brand) {
            $companyName = session()->get('name') ?? 'Brand Business';
            $this->brandModel->insert([
                'user_id'      => $userId,
                'company_name' => $companyName,
                'owner_name'   => $companyName,
            ]);
            $brand = $this->brandModel->getByUserId($userId);
        }

        return $brand;
    }

    public function onboarding(): string
    {
        $brand = $this->getLoggedInBrand();
        return view('brand/onboarding', [
            'title' => 'Brand Setup | CollabHub',
            'brand' => $brand,
        ]);
    }

    public function saveOnboarding()
    {
        $brand = $this->getLoggedInBrand();
        $data  = [
            'company_name' => $this->request->getPost('company_name'),
            'industry'     => $this->request->getPost('industry'),
            'owner_name'   => $this->request->getPost('owner_name'),
        ];

        $this->brandModel->update($brand['id'], $data);
        session()->set('name', $data['company_name']);

        return redirect()->to(base_url('brand/dashboard'))->with('success', 'Brand setup completed! Welcome to your dashboard.');
    }

    public function dashboard(): string
    {
        $brand     = $this->getLoggedInBrand();
        $campaigns = $this->campaignModel->getBrandCampaigns($brand['id']);

        return view('brand/dashboard', [
            'title'     => 'Brand Dashboard | CollabHub',
            'brand'     => $brand,
            'campaigns' => $campaigns,
        ]);
    }

    public function profile(): string
    {
        $brand = $this->getLoggedInBrand();
        return view('brand/profile', [
            'title' => 'Business Profile | CollabHub',
            'brand' => $brand,
        ]);
    }

    public function updateProfile()
    {
        $brand = $this->getLoggedInBrand();
        $rules = [
            'company_name' => 'required|min_length[2]|max_length[100]',
            'owner_name'   => 'permit_empty|max_length[100]',
            'industry'     => 'permit_empty|max_length[100]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $companyName = $this->request->getPost('company_name');
        $ownerName   = $this->request->getPost('owner_name');
        $industry    = $this->request->getPost('industry');

        $this->brandModel->update($brand['id'], [
            'company_name' => $companyName,
            'owner_name'   => $ownerName,
            'industry'     => $industry,
        ]);

        session()->set('name', $companyName);

        return redirect()->to(base_url('brand/profile'))->with('success', 'Brand profile updated successfully!');
    }

    public function createCampaign(): string
    {
        $brand = $this->getLoggedInBrand();
        return view('brand/create_campaign', [
            'title' => 'Create New Campaign | CollabHub',
            'brand' => $brand,
        ]);
    }

    public function storeCampaign()
    {
        $brand = $this->getLoggedInBrand();
        $rules = [
            'title'              => 'required|min_length[3]|max_length[191]',
            'category'           => 'required',
            'budget'             => 'required|numeric',
            'influencers_needed' => 'permit_empty|integer',
            'description'        => 'required',
            'deliverables'       => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->campaignModel->insert([
            'brand_id'           => $brand['id'],
            'title'              => $this->request->getPost('title'),
            'category'           => $this->request->getPost('category'),
            'budget'             => (float) $this->request->getPost('budget'),
            'status'             => 'active',
            'influencers_needed' => (int) ($this->request->getPost('influencers_needed') ?? 1),
            'influencers_hired'  => 0,
            'description'        => $this->request->getPost('description'),
            'deliverables'       => $this->request->getPost('deliverables'),
        ]);

        return redirect()->to(base_url('brand/campaigns'))->with('success', 'New campaign launched successfully!');
    }

    public function campaigns(): string
    {
        $brand     = $this->getLoggedInBrand();
        $campaigns = $this->campaignModel->getBrandCampaigns($brand['id']);

        return view('brand/campaigns', [
            'title'     => 'My Brand Campaigns | CollabHub',
            'brand'     => $brand,
            'campaigns' => $campaigns,
        ]);
    }

    public function campaignDetail($id = 1): string
    {
        $brand    = $this->getLoggedInBrand();
        $campaign = $this->campaignModel->find($id);

        return view('brand/campaign_detail', [
            'title'    => 'Campaign Management | CollabHub',
            'id'       => $id,
            'brand'    => $brand,
            'campaign' => $campaign,
        ]);
    }

    public function requests(): string
    {
        $brand    = $this->getLoggedInBrand();
        $requests = $this->requestModel->getRequestsForBrand($brand['id']);

        return view('brand/requests', [
            'title'    => 'Collaboration Requests | CollabHub',
            'brand'    => $brand,
            'requests' => $requests,
        ]);
    }

    public function updateRequestStatus()
    {
        $requestId = (int) $this->request->getPost('request_id');
        $status    = $this->request->getPost('status');

        if (in_array($status, ['accepted', 'rejected'], true)) {
            $this->requestModel->update($requestId, ['status' => $status]);
        }

        return redirect()->to(base_url('brand/requests'))->with('success', 'Proposal status updated to ' . $status . '!');
    }

    public function messages(): string
    {
        $brand        = $this->getLoggedInBrand();
        $userId       = session()->get('user_id');
        $receiverId   = (int) ($this->request->getGet('with') ?? 7); // Default creator user id
        $chatMessages = $this->messageModel->getConversation($userId, $receiverId);

        return view('brand/messages', [
            'title'        => 'Brand Chat | CollabHub',
            'brand'        => $brand,
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

        return redirect()->to(base_url('brand/messages?with=' . $receiverId));
    }

    public function influencers(): string
    {
        return view('brand/influencers', ['title' => 'Find Influencers | CollabHub']);
    }

    public function influencerDetail($id = 1): string
    {
        return view('brand/influencer_detail', ['title' => 'Influencer Profile | CollabHub', 'id' => $id]);
    }

    public function analytics(): string
    {
        return view('brand/analytics', ['title' => 'Analytics & Performance | CollabHub']);
    }

    public function billing(): string
    {
        return view('brand/billing', ['title' => 'Billing & Subscriptions | CollabHub']);
    }

    public function settings(): string
    {
        $brand = $this->getLoggedInBrand();
        return view('brand/settings', [
            'title' => 'Brand Settings | CollabHub',
            'brand' => $brand,
        ]);
    }
}
