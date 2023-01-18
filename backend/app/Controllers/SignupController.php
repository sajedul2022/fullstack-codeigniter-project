<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

helper('form');

class SignupController extends BaseController
{


    public function index()
    {
        return view('auth/signup');
    }

    public function store()
    {

        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[50]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
        $errors = [
            'name' => [
                'required' => 'Name must be fill',
                'min_length' => 'Minimum length 2',
                'max_length' => 'Maximum length 50',
            ],
            'email' => [
                'required' => 'Email must be fill',
                'min_length' => 'Minimum length 4',
                'max_length' => 'Maximum length 50',
                'valid' => 'Email is not valid',
                'unique' => 'Please enter a unique email',
            ],
            'password' => [
                'required' => 'Password must be fill',
                'min_length' => 'Minimum length 4',
                'max_length' => 'Maximum length 50',
            ],
            'confirmpassword'  => [
                'matches' => 'Password not match',

            ],
        ];

        if ($this->validate($rules)) {
            $userModel = new UsersModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                // 'password' => $this->request->getVar('password'),
            ];
            $userModel->save($data);
            return redirect()->to('/users/signin');
            // echo ("Successfull");
        } else {
            $data['validation'] = $this->validator;
            echo view('/auth/signup', $data);
        }
    }
}