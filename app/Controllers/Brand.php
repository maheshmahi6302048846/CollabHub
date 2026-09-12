<?php

namespace App\Controllers;

class Brand extends BaseController
{
    public function onboarding(): string
    {
        return view('brand/onboarding', ['title' => 'Brand Setup | CollabHub']);
    }

    public function dashboard(): string
    {
        return view('brand/dashboard', ['title' => 'Brand Dashboard | CollabHub']);
    }

    public function createCampaign(): string
    {
        return view('brand/create_campaign', ['title' => 'Create New Campaign | CollabHub']);
    }

    public function influencers(): string
    {
        return view('brand/influencers', ['title' => 'Find Influencers | CollabHub']);
    }

    public function influencerDetail($id = 1): string
    {
        return view('brand/influencer_detail', ['title' => 'Influencer Profile | CollabHub', 'id' => $id]);
    }

    public function campaigns(): string
    {
        return view('brand/campaigns', ['title' => 'My Brand Campaigns | CollabHub']);
    }

    public function campaignDetail($id = 1): string
    {
        return view('brand/campaign_detail', ['title' => 'Campaign Management | CollabHub', 'id' => $id]);
    }

    public function requests(): string
    {
        return view('brand/requests', ['title' => 'Collaboration Requests | CollabHub']);
    }

    public function messages(): string
    {
        return view('brand/messages', ['title' => 'Brand Chat | CollabHub']);
    }

    public function analytics(): string
    {
        return view('brand/analytics', ['title' => 'Analytics & Performance | CollabHub']);
    }

    public function profile(): string
    {
        return view('brand/profile', ['title' => 'Business Profile | CollabHub']);
    }

    public function billing(): string
    {
        return view('brand/billing', ['title' => 'Billing & Subscriptions | CollabHub']);
    }

    public function settings(): string
    {
        return view('brand/settings', ['title' => 'Brand Settings | CollabHub']);
    }
}
