// * eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react'
import axios from "axios";
import { Link } from "react-router-dom";
 
const AllProduct = () => {
    const [products, setProducts] = useState([]);
 
    useEffect(() => {
        getProducts();
    },[]);
 
    const getProducts = async () => {
        const products = await axios.get('http://localhost:8080/ProductFrontend/products');
        setProducts(products.data);
    }
    console.log(products);
 
    // const deleteProduct = async (id) =>{
    //     await axios.delete(`http://localhost:8080/products/${id}`);
    //     getProducts();
    // }

  return (
    <div class="container">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <h1 class="text-center">All Products Overview </h1>
          <hr/>
          
          <table className="table table-striped table-bordered">
          <thead className="thead-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
                <th>Price</th>
                <th>Image</th>
                <th>Stock</th>
              </tr>
            </thead>
            <tbody>
            { products.map((product, index) => (
                        <tr key={product.id}>
                            <td>{index + 1}</td>
                            <td>{product.product_name}</td>
                            <td>{product.product_details}</td>
                            <td>{product.product_price}</td>
                            <td>
                                <img width={100} src={`http://localhost:8080/${product.product_image}`}/>
                            </td>
                            <td>{product.product_stock}</td>
                            {/* <td>
                                <Link to={`/edit/${product.id}`} className="btn btn-success">Edit</Link>
                                <button onClick={() => deleteProduct(product.id)} className="btn btn-danger">Delete</button>
                            </td> */}
                        </tr>
                    )) }
            </tbody>
          </table>
          {/* <Link to="/products/add" className="btn btn-secondary">
        Add new product
      </Link> */}
        </div>
        <div class="col-md-2"> </div>
      </div>
    </div>
  );
};

export default AllProduct;
