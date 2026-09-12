<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// PUBLIC MARKETING WEBSITE
$routes->get('/', 'Home::index');
$routes->get('for-influencers', 'Home::forInfluencers');
$routes->get('for-brands', 'Home::forBrands');
$routes->get('how-it-works', 'Home::howItWorks');
$routes->get('campaigns', 'Home::campaigns');
$routes->get('campaigns/(:num)', 'Home::campaignDetail/$1');
$routes->get('success-stories', 'Home::successStories');
$routes->get('pricing', 'Home::pricing');
$routes->get('blog', 'Home::blog');
$routes->get('contact', 'Home::contact');
$routes->get('faq', 'Home::faq');

// AUTHENTICATION & ONBOARDING
$routes->get('login', 'Auth::login');
$routes->get('register', 'Auth::register');
$routes->get('forgot-password', 'Auth::forgotPassword');
$routes->get('reset-password', 'Auth::resetPassword');
$routes->get('logout', 'Auth::logout');

// CREATOR WEB APP
$routes->group('creator', function($routes) {
    $routes->get('onboarding', 'Creator::onboarding');
    $routes->get('dashboard', 'Creator::dashboard');
    $routes->get('discover', 'Creator::discover');
    $routes->get('discover/(:num)', 'Creator::opportunityDetail/$1');
    $routes->get('requests', 'Creator::requests');
    $routes->get('campaigns', 'Creator::campaigns');
    $routes->get('campaigns/(:num)', 'Creator::campaignDetail/$1');
    $routes->get('messages', 'Creator::messages');
    $routes->get('earnings', 'Creator::earnings');
    $routes->get('profile', 'Creator::profile');
    $routes->get('settings', 'Creator::settings');
});

// BRAND WEB APP
$routes->group('brand', function($routes) {
    $routes->get('onboarding', 'Brand::onboarding');
    $routes->get('dashboard', 'Brand::dashboard');
    $routes->get('campaigns/create', 'Brand::createCampaign');
    $routes->get('campaigns', 'Brand::campaigns');
    $routes->get('campaigns/(:num)', 'Brand::campaignDetail/$1');
    $routes->get('influencers', 'Brand::influencers');
    $routes->get('influencers/(:num)', 'Brand::influencerDetail/$1');
    $routes->get('requests', 'Brand::requests');
    $routes->get('messages', 'Brand::messages');
    $routes->get('analytics', 'Brand::analytics');
    $routes->get('profile', 'Brand::profile');
    $routes->get('billing', 'Brand::billing');
    $routes->get('settings', 'Brand::settings');
});

// SYSTEM & ERROR STATES
$routes->get('search', 'System::search');
$routes->get('system/states', 'System::states');
$routes->get('system/404', 'System::error404');
$routes->get('system/500', 'System::error500');
$routes->get('system/unauthorized', 'System::unauthorized');
$routes->get('system/session-expired', 'System::sessionExpired');
