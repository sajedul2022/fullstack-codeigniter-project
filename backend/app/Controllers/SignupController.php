<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

    helper(['form']);


class SignupController extends BaseController{

    public function index(){
        return view('auth/signup');
    }

   

    public function store(){
        helper(['form']);
        $rules = [
            'name'              => 'required|min_length[2]|max_length[50]',
            'email'             => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'          => 'required|min_length[4]|max_length[50]',
            'confirmpassword'   => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UsersModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            echo "Registration Done";
            return redirect()->to('/users/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('auth/signup', $data);
        }
          
    }


}
