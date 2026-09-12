<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url('login'))->with('error', 'Please log in to access this page.');
        }

        // Role-based authorization if arguments are specified (e.g., ['brand'] or ['creator'])
        if (!empty($arguments)) {
            $userRole = session()->get('role');
            if (!in_array($userRole, $arguments, true)) {
                $targetDashboard = $userRole === 'brand' ? 'brand/dashboard' : 'creator/dashboard';
                return redirect()->to(base_url($targetDashboard))->with('error', 'Access denied to that section.');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing after execution
    }
}
