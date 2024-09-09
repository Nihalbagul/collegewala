<?php
namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function mobileLogin()
    {
        return view('login_mobile');
    }

    public function emailLogin()
    {
        return view('login_email');
    }

    public function processMobileLogin()
    {
        $mobile = $this->request->getPost('mobile');
        $adminModel = new AdminModel();
        $admin = $adminModel->getAdminByMobile($mobile);

        if ($admin) {
            $otp = generateOTP();
            $adminModel->updateOTP($admin['id'], $otp);
            if (sendOTPMobile($mobile, $otp)) {
                return redirect()->to('verify_mobile_otp/' . $admin['id']);
            } else {
                return redirect()->back()->with('error', 'Failed to send OTP.');
            }
        } else {
            return redirect()->back()->with('error', 'Mobile number not found.');
        }
    }

    public function processEmailLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $adminModel = new AdminModel();
        $admin = $adminModel->getAdminByEmail($email);

        if ($admin && password_verify($password, $admin['password'])) {
            $otp = generateOTP();
            $adminModel->updateOTP($admin['id'], $otp);
            if (sendOTPEmail($email, $otp)) {
                return redirect()->to('verify_email_otp/' . $admin['id']);
            } else {
                return redirect()->back()->with('error', 'Failed to send OTP.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function showVerifyMobileOTP($id)
    {
        $data['adminId'] = $id;
        return view('verify_mobile_otp', $data);
    }

    public function showVerifyEmailOTP($id)
    {
        $data['adminId'] = $id;
        return view('verify_email_otp', $data);
    }

    public function verifyMobileOTP($id)
    {
        $otp = $this->request->getPost('otp');
        $adminModel = new AdminModel();
        
        if ($adminModel->verifyOTP($id, $otp)) {
            $session = session();
            // Assuming you store user role in your database
            $admin = $adminModel->find($id);
            
            // Store admin login session
            $session->set([
                'admin_logged_in' => true,
                'role' => 'admin',
                'admin_id' => $admin['id'],
            ]);
    
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid OTP.');
        }
    }
    

    public function verifyEmailOTP($id)
    {
        $otp = $this->request->getPost('otp');
        $adminModel = new AdminModel();
        if ($adminModel->verifyOTP($id, $otp)) {
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid OTP.');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the session and log out the admin
        return redirect()->to('login/mobile')->with('success', 'Logged out successfully.');
    }
    
    

}
