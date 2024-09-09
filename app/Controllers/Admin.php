<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function __construct()
    {
        $session = session();
        if (!$session->has('admin_logged_in')) {
            return redirect()->to('/login'); // Redirect to login page if not logged in
        }
    }

    public function dashboard()
    {
        $session = session();
        
        // Check if the user is an admin
        if ($session->get('role') !== 'admin') {
            return redirect()->to('/login')->with('error', 'Unauthorized Access');
        }

        return view('admin/dashboard');
    }
}
