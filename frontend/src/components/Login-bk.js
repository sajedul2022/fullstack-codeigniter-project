import React from 'react'
import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function Login() {

  const navigate = useNavigate();
  const [user, setUser] = useState({ email: "", password: "" });

  const handleChange = (e) => {
    setUser({ ...user, [e.target.name]: e.target.value });
  };


  const handleSubmit = (e) => {
    e.preventDefault();
    //console.log(user);
    axios
      .post(
        "http://localhost/reactjs_login_registration/api/login.php",
        user
      )
      .then((res) => {
        //console.log(res.data);
        if (res.data.status === 200) {
          //console.log("Need to set session");
          localStorage.setItem("email", res.data.email);
          localStorage.setItem("fullname", res.data.fname);
          navigate("/dashboard");
        } else {
          alert("Try with correct password");
        }
      });
  };

  return (
    <div class="container">
      <div class="row">
            <h1 class="text-center" >Login Form</h1>

            <form onSubmit={handleSubmit} >
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name='email' class="form-control"  placeholder="Enter email"
                    onChange={handleChange}
                    />
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name='password' class="form-control"  placeholder="Password"
                    onChange={handleChange}
                    />
                </div>
               
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
  )
}
