<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;

class ProductFrontend extends BaseController{

    use ResponseTrait;

    public function index(){
        $model = new ProductModel();
        $products = $model->orderBy('id','DESC')->findAll();
        return $this->respond($products);
    }
}
