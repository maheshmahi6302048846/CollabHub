<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BrandModel;
use App\Models\CreatorModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            $role = session()->get('role');
            return redirect()->to(base_url($role === 'brand' ? 'brand/dashboard' : 'creator/dashboard'));
        }

        return view('auth/login', ['title' => 'Sign In | CollabHub']);
    }

    public function attemptLogin()
    {
        try {
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[6]',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $email    = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user      = $userModel->findByEmail($email);

            if (!$user || !password_verify($password, $user['password_hash'])) {
                return redirect()->back()->withInput()->with('error', 'Invalid email address or password.');
            }

            if ($user['status'] !== 'active') {
                return redirect()->back()->withInput()->with('error', 'Your account has been deactivated.');
            }

            // Fetch associated profile name
            $name = 'User';
            if ($user['role'] === 'brand') {
                $brandModel = new BrandModel();
                $brand      = $brandModel->getByUserId($user['id']);
                $name       = $brand['company_name'] ?? 'Brand Owner';
            } else {
                $creatorModel = new CreatorModel();
                $creator      = $creatorModel->getByUserId($user['id']);
                $name         = $creator['full_name'] ?? 'Creator';
            }

            // Set Session
            session()->set([
                'user_id'    => $user['id'],
                'email'      => $user['email'],
                'name'       => $name,
                'role'       => $user['role'],
                'isLoggedIn' => true,
            ]);

            $redirectUrl = $user['role'] === 'brand' ? 'brand/dashboard' : 'creator/dashboard';
            return redirect()->to(base_url($redirectUrl))->with('success', 'Welcome back, ' . esc($name) . '!');
        } catch (\Throwable $e) {
            log_message('error', 'Login Error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Login error: ' . $e->getMessage());
        }
    }

    public function register()
    {
        if (session()->get('isLoggedIn')) {
            $role = session()->get('role');
            return redirect()->to(base_url($role === 'brand' ? 'brand/dashboard' : 'creator/dashboard'));
        }

        return view('auth/register', ['title' => 'Create Account | CollabHub']);
    }

    public function attemptRegister()
    {
        try {
            $rules = [
                'name'             => 'required|min_length[3]|max_length[100]',
                'email'            => 'required|valid_email|is_unique[users.email]',
                'password'         => 'required|min_length[6]',
                'confirm_password' => 'required|matches[password]',
                'role'             => 'required|in_list[brand,creator]',
            ];

            if (!$this->validate($rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $name     = $this->request->getPost('name');
            $email    = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $role     = $this->request->getPost('role');

            $userModel = new UserModel();

            // Save User
            $userId = $userModel->insert([
                'email'         => $email,
                'password_hash' => password_hash($password, PASSWORD_BCRYPT),
                'role'          => $role,
                'status'        => 'active',
            ]);

            if (!$userId) {
                return redirect()->back()->withInput()->with('error', 'Failed to create user account. Please try again.');
            }

            // Create Profile based on Role
            if ($role === 'brand') {
                $brandModel = new BrandModel();
                $brandModel->insert([
                    'user_id'      => $userId,
                    'company_name' => $name,
                    'owner_name'   => $name,
                ]);
            } else {
                $creatorModel = new CreatorModel();
                $handle       = '@' . strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $name));
                $creatorModel->insert([
                    'user_id'   => $userId,
                    'full_name' => $name,
                    'handle'    => $handle,
                ]);
            }

            // Set Session
            session()->set([
                'user_id'    => $userId,
                'email'      => $email,
                'name'       => $name,
                'role'       => $role,
                'isLoggedIn' => true,
            ]);

            $redirectUrl = $role === 'brand' ? 'brand/dashboard' : 'creator/dashboard';
            return redirect()->to(base_url($redirectUrl))->with('success', 'Account created successfully! Welcome to CollabHub.');
        } catch (\Throwable $e) {
            log_message('error', 'Register Error: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Registration error: ' . $e->getMessage());
        }
    }


    public function forgotPassword()
    {
        return view('auth/forgot_password', ['title' => 'Forgot Password | CollabHub']);
    }

    public function resetPassword()
    {
        return view('auth/reset_password', ['title' => 'Reset Password | CollabHub']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'))->with('success', 'You have been logged out successfully.');
    }
}
