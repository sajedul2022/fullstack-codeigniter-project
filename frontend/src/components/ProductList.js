// * eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react'
import axios from "axios";
import { Link } from "react-router-dom";
 
const ProductList = () => {
    const [products, setProducts] = useState([]);
 
    useEffect(() => {
        getProducts();
    },[]);
 
    const getProducts = async () => {
        const products = await axios.get('http://localhost:8080/products');
        setProducts(products.data.products);
    }
    console.log(products);
 
    const deleteProduct = async (id) =>{
        await axios.delete(`http://localhost:8080/products/${id}`);
        getProducts();
    }
 
    return (
        <div className="container" >
            {/* <Link to="/add" className="btn btn-primary ">Add New</Link> */}
            {/* <Link to="/add" className="btn btn-primary ">Add New</Link> */}
            <table className="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Image</th>
                        {/* <th>Actions</th> */}
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
                            {/* <td>
                                <Link to={`/edit/${product.id}`} className="btn btn-success">Edit</Link>
                                <button onClick={() => deleteProduct(product.id)} className="btn btn-danger">Delete</button>
                            </td> */}
                        </tr>
                    )) }
                    
                            {/* id	product_name	product_details	product_price	product_image	product_category */}
                     
                </tbody>
            </table>
        </div>
    )
}
 
export default ProductList