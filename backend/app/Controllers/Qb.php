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

    // active record test pratice

    public function pratice(){

        $db      = \Config\Database::connect('dbquery');
        

        // 01. WHERE jobTitle= 'Sales Rep';

        // $builder = $db->table('employees');
        // $row = $builder->select('firstName, lastName, email, jobTitle' );
        // $row = $builder->where( array('jobTitle' => 'Sales Rep'));


        // 02. WHERE jobTitle= 'Sales Rep' AND 'reportsTo' => '1143'
        //  $builder = $db->table('employees');
        // $row = $builder->select('firstName, lastName, email, jobTitle,reportsTo' );
        // $row = $builder->where( array('jobTitle' => 'Sales Rep'));
        // $row = $builder->where( array('reportsTo' => '1143'));

        // 03. 'country'=> 'USA'

        // $builder = $db->table('employees');
        // $builder->select('firstName, lastName, email, city, country');
        // $row = $builder->join('offices', 'offices.officeCode  = employees.officeCode and offices.country= "USA" ');


        // 04.
        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orderNumber, orderDate, status');
        // $row = $builder->join('customers', 'customers.customerNumber  = orders.customerNumber ');

        // 05.
        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orders.orderNumber, orderDate, status,quantityOrdered,priceEach');
        // $row = $builder->join('customers', 'customers.customerNumber  = orders.customerNumber ');
        // $row = $builder->join('orderdetails', 'orders.orderNumber = orderdetails.orderNumber ');

        // 06.

        $builder = $db->table('orders');
        $select = $builder->select('customerName, city, orders.orderNumber, orderDate, products.productCode, productName, quantityOrdered, priceEach, MSRP');
        
        $row = $select->selectSum('quantityOrdered');
        $row = $select->selectSum('priceEach');
        $row = $select->groupBy('orders.orderNumber');

        $row = $builder->join('customers', 'customers.customerNumber  = orders.customerNumber ');
        $row = $builder->join('orderdetails', 'orders.orderNumber = orderdetails.orderNumber ');
        $row = $builder->join('products', 'products.productCode = orderdetails.productCode ');


        $data = $row->get()->getResultArray();

        echo "<pre>";
           print_r($data);
        echo "</pre>";
        return view('pratice');
        
    }
}
