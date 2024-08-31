<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller {
    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }

    public function loginPost() {
        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getVar('email'))->first();
        
        if($user && password_verify($this->request->getVar('password'), $user['password'])) {
            session()->set('user', $user);
            return redirect()->to('/colleges');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }

    public function registerPost() {
        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ]);
        return redirect()->to('/login')->with('success', 'Registration Successful');
    }
}
