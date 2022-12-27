<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;

class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
        function __construct(){
            helper(['form', 'url']);
        }

    public function index(){
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        // print_r($data);
        
        return view('product/product_list', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view("product/product_entry");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create(){

        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[15]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required',
        ]);

        if(!$validate){
            return view('product/product_entry', ['validation' => $this->validator]);
        }else{
            $model = new ProductModel();
            $data = $this->request->getPost();
            $model->save($data);
            return redirect()->to('/products');
        }


    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null){
        
        return "Edit page";
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null){
        $model = new ProductModel();
        $data = $model->delete($id);

        return redirect()->to('/products');
    }
}
