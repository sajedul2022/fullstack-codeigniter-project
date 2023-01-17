import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function Register() {
  const navigate = useNavigate();
  const [info, setInfo] = useState({
    fname: "",
    lname: "",
    email: "",
    password: "",
  });

  const changeValue = (e) => {
    setInfo({ ...info, [e.target.name]: e.target.value });
  };

  const formSubmit = (e) => {
    e.preventDefault();
    axios
      .post(
        "http://localhost/inventory-react-php-mysql/api/register.php",
        // "api/register.php",
        info
      )
      .then((res) => {
        console.log(res.data);

        if (res.data.empty) {
          alert(res.data.empty);
        }

        if (res.data.duplicate) {
          alert(res.data.duplicate);
        }

        if (res.data.success) {
          alert(res.data.success);
          navigate("/login");
        }
      });
  };

  console.log(info);

  return (
    <div class="container">
      <div class="row">
        <h1 class="text-center">Registration Form</h1>
        <div class="col-md-2"> </div>

        <div class="col-md-6">
          <form onSubmit={formSubmit} method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input
                type="text"
                name="fname"
                class="form-control"
                placeholder="Enter email"
                onChange={changeValue}
              />
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Last Name</label>
              <input
                type="text"
                name="lname"
                class="form-control"
                placeholder="Password"
                onChange={changeValue}
              />
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter email"
                onChange={changeValue}
              />
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
                onChange={changeValue}
              />
            </div> <br/>

            <button type="submit" class="btn btn-primary">
              Register
            </button>
          </form>
        </div>

        <div class="col-md-2"> </div>
      </div>
    </div>
  );
}
