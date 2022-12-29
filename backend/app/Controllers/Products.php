<?php

namespace App\Controllers;

use App\Database\Migrations\Category;
use App\Models\CategoryModel;
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
        $data['products'] = $model->orderBy('id','DESC')->findAll();
        // print_r($data);


        // category
        $catmodel = new CategoryModel();
        $data['cats'] = $catmodel->orderBy('cat_name')->findAll();
        
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
    public function new(){

        $catmodel = new CategoryModel();
        $data['cats'] = $catmodel->orderBy('cat_name')->findAll();

        return view("product/product_entry",$data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create(){

        $rules = [
            'product_name' => 'required|min_length[3]|max_length[15]',
            'product_details' => 'required|min_length[5]',
            'product_price' => 'required|numeric',
            'product_image' => [
                                'uploaded[product_image]',
                                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                                'max_size[product_image,1024]',
            ],
            // 'product_category' => 'required|numeric',

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
                'product_image' => [
                    'uploaded' => 'Image Must be upload',
                    'mime_in' => 'Only image/jpg,image/jpeg,image/png Allowed',
                    'max_size' => 'Image not more than 1MB'
                ],
        ];

        $validation = $this->validate($rules, $errors);
        
        if(!$validation){
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }else{

                $model = new ProductModel();
                
                // for image upload
                $img = $this->request->getFile('product_image');
                $path = "/assets/uploads/";
                $img->move($path);
                
                 $data = [
                    'product_name' => $this->request->getPost('product_name'),
                    'product_details'  => $this->request->getPost('product_details'),
                    'product_price'  => $this->request->getPost('product_price'),
                    $namepath = $path.$img->getName(),
                    'product_image' =>  $namepath,
                    'product_category'  => $this->request->getPost('product_category'),


                ];

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

        $rules = [
            'product_name' => 'required|min_length[5]|max_length[15]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
            'product_image' => [
                                'uploaded[product_image]',
                                'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                                'max_size[product_image,1024]',
                                ]
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
                'product_image' => [
                    'uploaded' => 'Image Must be upload',
                    'mime_in' => 'Only image/jpg,image/jpeg,image/png Allowed',
                    'max_size' => 'Image not more than 1MB'
                ],
        ];

        $validation = $this->validate($rules, $errors);
        

        if(!$validation){
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }else{
             // for image upload
             $img = $this->request->getFile('product_image');
             $path = "assets/uploads/";
             $img->move($path);

            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_details'  => $this->request->getVar('product_details'),
                'product_price'  => $this->request->getVar('product_price'),
                $namepath = $path.$img->getName(),
                'product_image' =>  $namepath
            ];

            $model = new ProductModel();
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
