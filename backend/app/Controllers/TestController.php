<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class TestController extends BaseController{
    
    public function index(){
        return view('pages/home_page');
    }
    public function about(){
        return view('pages/about_page');
    }

    public function productList(){

        $model = new  ProductModel();
        $data = [
            'products' => $model->paginate(3, 'group1'),
            
            'pager' => $model->pager
        ];

        return view('pages/list', $data );
    }
}
