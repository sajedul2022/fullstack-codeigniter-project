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

        $rules = [
            'product_name' => 'required|min_length[5]|max_length[15]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
        ];

        $errors = 
            [
                'product_name' => [
                    'required' => 'Product Name Must be fill',
                    'min_length' => 'Minimum Length 5',
                    'max_length' => 'Maximum Length 15',
                ],
                'product_details' => [
                    'required' => 'Product Details Must be fill',
                    'max_length' => 'Maximum Length 5',
                ],
                'product_price' => [
                    'required' => 'Product Price Must be fill',
                    'numeric' => 'Price Must be Number'
                ],
        ];

        $validation = $this->validate($rules, $errors);
        
        if(!$validation){
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }else{
                $model = new ProductModel();
                $data = $this->request->getPost();
                $model->save($data);
                return redirect()->to('/products')->with('msg', 'Created Successfully');
            }


    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null){

        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('product/product_edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null){

        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[15]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required',
        ]);

        if(!$validate){
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }else{
            $model = new ProductModel();
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_details'  => $this->request->getVar('product_details'),
                'product_price'  => $this->request->getVar('product_price'),
            ];
            $model->update($id, $data);

            return redirect()->to('/products')->with('msg', 'Update Successfully');
        }

    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null){
        $model = new ProductModel();
        $data = $model->delete($id);

        return redirect()->to('/products')->with('msg', 'Delete Successfully');
    }
}
