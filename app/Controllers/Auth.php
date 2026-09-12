<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login', ['title' => 'Sign In | CollabHub']);
    }

    public function register(): string
    {
        return view('auth/register', ['title' => 'Create Account | CollabHub']);
    }

    public function forgotPassword(): string
    {
        return view('auth/forgot_password', ['title' => 'Forgot Password | CollabHub']);
    }

    public function resetPassword(): string
    {
        return view('auth/reset_password', ['title' => 'Reset Password | CollabHub']);
    }

    public function logout()
    {
        return redirect()->to(base_url('login'));
    }
}
