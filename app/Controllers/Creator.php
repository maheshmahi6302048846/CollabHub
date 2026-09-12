<?php

namespace App\Controllers;

class Creator extends BaseController
{
    public function onboarding(): string
    {
        return view('creator/onboarding', ['title' => 'Creator Onboarding | CollabHub']);
    }

    public function dashboard(): string
    {
        return view('creator/dashboard', ['title' => 'Creator Dashboard | CollabHub']);
    }

    public function discover(): string
    {
        return view('creator/discover', ['title' => 'Discover Opportunities | CollabHub']);
    }

    public function opportunityDetail($id = 1): string
    {
        return view('creator/opportunity_detail', ['title' => 'Opportunity Details | CollabHub', 'id' => $id]);
    }

    public function requests(): string
    {
        return view('creator/requests', ['title' => 'My Requests | CollabHub']);
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
        return view('creator/messages', ['title' => 'Messages | CollabHub']);
    }

    public function earnings(): string
    {
        return view('creator/earnings', ['title' => 'Earnings & Financials | CollabHub']);
    }

    public function profile(): string
    {
        return view('creator/profile', ['title' => 'Creator Profile | CollabHub']);
    }

    public function settings(): string
    {
        return view('creator/settings', ['title' => 'Account Settings | CollabHub']);
    }
}
