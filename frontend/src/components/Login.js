import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function Login() {
  const navigate = useNavigate();

  const [user, setUser] = useState({
    email: "",
    password: "",
  });
  const handleChange = (e) => {
    setUser({ ...user, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    // console.log(user);

    axios
      .post(
        "http://localhost/inventory-react-php-mysql/api/login.php", 
        // "api/login.php", 
        user)
      .then((response) => {
        // console.log(response.data);

        if (response.data.success) {
          // alert(response.data.success);

          console.log(response.data.user);
          sessionStorage.setItem("email", response.data.user.email);
          sessionStorage.setItem(
            "fullname",
            response.data.user.fname + " " + response.data.user.lname
          );

          navigate("/dashboard");
        } else {
          alert(response.data.error);
        }
      });
  };

  return (
    <div class="container">
      <div class="row">
        <h1 class="text-center">Login Form</h1>

        <div class="col-md-2"> </div>

        <div class="col-md-6">
          <form onSubmit={handleSubmit} method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter email"
                onChange={handleChange}
              />
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
                onChange={handleChange}
              />
            </div> <br/>

            <button type="submit" class="btn btn-primary">
              Login
            </button>
          </form>
        </div>

        <div class="col-md-4"> </div>
      </div>
    </div>
  );
}
