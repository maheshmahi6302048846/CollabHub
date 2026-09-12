<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('public/home', ['title' => 'CollabHub | Connect. Collaborate. Grow.']);
    }

    public function forInfluencers(): string
    {
        return view('public/for_influencers', ['title' => 'For Influencers | CollabHub']);
    }

    public function forBrands(): string
    {
        return view('public/for_brands', ['title' => 'For Brands & Businesses | CollabHub']);
    }

    public function howItWorks(): string
    {
        return view('public/how_it_works', ['title' => 'How It Works | CollabHub']);
    }

    public function campaigns(): string
    {
        return view('public/campaigns', ['title' => 'Explore Campaigns | CollabHub']);
    }

    public function campaignDetail($id = 1): string
    {
        return view('public/campaign_detail', ['title' => 'Campaign Details | CollabHub', 'id' => $id]);
    }

    public function successStories(): string
    {
        return view('public/success_stories', ['title' => 'Success Stories | CollabHub']);
    }

    public function pricing(): string
    {
        return view('public/pricing', ['title' => 'Transparent Pricing | CollabHub']);
    }

    public function blog(): string
    {
        return view('public/blog', ['title' => 'Resources & Creator Blog | CollabHub']);
    }

    public function contact(): string
    {
        return view('public/contact', ['title' => 'Contact Us | CollabHub']);
    }

    public function faq(): string
    {
        return view('public/faq', ['title' => 'Frequently Asked Questions | CollabHub']);
    }
}
