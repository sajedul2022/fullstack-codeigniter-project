<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Qb extends BaseController{

    public function index(){
        $db      = \Config\Database::connect();
        // $builder = $db->table('products')->limit(3,1);
        $builder = $db->table('products');

        $row = $builder->get();
        // $row = $builder->getWhere(['id' => 4]);
        $data['products'] = $row->getResult();

        // echo "<pre>";
        //    print_r($data);
        // echo "</pre>";

        return view('test', $data);
        
    }

    //for specific select field    

    public function selectqb(){
        $db      = \Config\Database::connect();
        $builder = $db->table('products');

        ## $builder->select()

        // $row = $builder->select('id,product_name,product_price');
        // $data = $row->get();
        // $data = $data->getResult();


        ## $builder->selectMax()

        // $row = $builder->selectMax('product_price');
        // $data = $row->get();
        // $data = $data->getResult();

        ## $builder->selectSum()

        // $row = $builder->selectSum('product_price');
        // $data = $row->get();
        // $data = $data->getResult();

        ## $builder->select('product_category')->selectSum('product_price')->groupBy('product_category')

        // $row = $builder->select('product_category')->selectSum('product_price')->groupBy('product_category');
        // $data = $row->get();
        // $data = $data->getResult();

        ## $builder->join()

        // $builder->select('*');
        // $row = $builder->join('categories', 'categories.id = products.product_category');
        // $data = $row->get()->getResult();

        ## $builder->where()

        // $builder2 = $db->table('products,categories');
        // $row = $builder2->where('categories.id = products.product_category');
        // $data = $row->get()->getResult();

        ## specific data show and where specific id

        $row = $builder->where('product_price > 500');
        $row = $builder->where('product_category > 1');
        $data = $row->get()->getResult();


        echo "<pre>";
           print_r($data);
        echo "</pre>";
        
    }
}
