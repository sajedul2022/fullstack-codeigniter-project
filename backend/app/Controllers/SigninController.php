<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

helper(['form']);


class SigninController extends BaseController{

    public function index(){
        return view('auth/signin');
    }

    public function loginAuth(){

        $session = session();
        $userModel = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                // return redirect()->to('/users/signin');
                return redirect()->back()->withInput();

            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            // return redirect()->to('/users/signin');
            return redirect()->back();
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();

        // echo "<pre>"; print_r($_SESSION); echo "</pre>";


        return redirect()->to('/users/signin');


    }

}
