<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder{
    public function run(){

        $datas = [
            [
                'product_name'      => 'Black Jacket',
                'product_details'   => 'Cloths',
                'product_price'   => '2000',
                'product_category' => 1
            ],
            [
                'product_name'      => 'Shirt',
                'product_details'   => 'Cloths',
                'product_price'   => '1200',
                'product_category' => 2
            ],
            [
                'product_name'      => 'Jercy',
                'product_details'   => 'Cloths',
                'product_price'   => '500',
                'product_category' => 3            
            ],
            [
                'product_name'      => 'Blezer',
                'product_details'   => 'Cloths',
                'product_price'   => '6000',
                'product_category' => 4
            ],

            [
                'product_name'      => 'Shoe',
                'product_details'   => 'Shoe Item',
                'product_price'   => '2000',
                'product_category' => 5
            ],
            [
                'product_name'      => 'Hat',
                'product_details'   => 'Cloths',
                'product_price'   => '1200',
                'product_category' => 6
            ],
            [
                'product_name'      => 'Watch',
                'product_details'   => 'Cloths',
                'product_price'   => '500',
                'product_category' => 7            
            ],
            [
                'product_name'      => 'Mobile',
                'product_details'   => 'Cloths',
                'product_price'   => '6000',
                'product_category' => 8
            ],
            [
                'product_name'      => 'Black Jacket',
                'product_details'   => 'Cloths',
                'product_price'   => '2000',
                'product_category' => 9
            ],
            [
                'product_name'      => 'Shirt',
                'product_details'   => 'Cloths',
                'product_price'   => '1200',
                'product_category' => 10
            ],
            [
                'product_name'      => 'Jercy',
                'product_details'   => 'Cloths',
                'product_price'   => '500',
                'product_category' => 8           
            ],
            [
                'product_name'      => 'Blezer',
                'product_details'   => 'Cloths',
                'product_price'   => '6000',
                'product_category' => 3
            ],

            [
                'product_name'      => 'Shoe',
                'product_details'   => 'Shoe Item',
                'product_price'   => '2000',
                'product_category' => 4
            ],
            [
                'product_name'      => 'Hat',
                'product_details'   => 'Cloths',
                'product_price'   => '1200',
                'product_category' => 5
            ],
            [
                'product_name'      => 'Watch',
                'product_details'   => 'Cloths',
                'product_price'   => '500',
                'product_category' => 6            
            ],
            [
                'product_name'      => 'Mobile',
                'product_details'   => 'Cloths',
                'product_price'   => '6000',
                'product_category' => 7
            ],
            
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach($datas as $data){
            $this->db->table('products2')->insert($data); 
        }
    }
}
