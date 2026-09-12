<?php

namespace App\Controllers;

class System extends BaseController
{
    public function search(): string
    {
        return view('system/search', ['title' => 'Global Search | CollabHub']);
    }

    public function states(): string
    {
        return view('system/states', ['title' => 'UI States & Component Gallery | CollabHub']);
    }

    public function error404(): string
    {
        return view('system/error_404', ['title' => 'Page Not Found | CollabHub']);
    }

    public function error500(): string
    {
        return view('system/error_500', ['title' => 'Server Error | CollabHub']);
    }

    public function unauthorized(): string
    {
        return view('system/unauthorized', ['title' => 'Unauthorized Access | CollabHub']);
    }

    public function sessionExpired(): string
    {
        return view('system/session_expired', ['title' => 'Session Expired | CollabHub']);
    }
}
