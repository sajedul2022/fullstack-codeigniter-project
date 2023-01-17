<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportController extends BaseController{

    public function stufflist(){

        // $db      = \Config\Database::connect('dbquery');
        $db      = db_connect('dbquery');
        $builder = $db->table('offices');
        $data = $builder->get()->getResultArray();

        // dd($data);
        // echo "<pre>"; print_r($data);echo "</pre>";

        return view('reports/stuff_list', ['offices'=>$data ] );
    }

    public function allstuff(){

        $code= $_GET['offcode'];
        $db      = db_connect('dbquery');
        $builder = $db->table('employees');
        $builder->select('*');
        $builder->where('officeCode', $code);
        $result['officeWise'] = $builder->get()->getResultArray();
        // dd($result);
        return view('reports/all_stuff', $result);
        
    }

    public function orderlist(){

        return view('reports/order_list');

    }


    public function orderQuery(){ 

        $start= $_GET['start'];
        $end= $_GET['end'];

        // SELECT * FROM orders WHERE orderDate BETWEEN '2003-01-06' AND '2003-03-03';

        $db      = db_connect('dbquery');
        $builder = $db->query("SELECT customerName, phone, city, orderNumber, orderDate, status FROM orders, customers WHERE orders.customerNumber = customers.customerNumber and orders.orderDate  BETWEEN '$start' AND '$end' ");
        
        $data['orders'] = $builder->getResultArray();

        dd($data);

        // return view('reports/orderquery', $data);

    }
}
