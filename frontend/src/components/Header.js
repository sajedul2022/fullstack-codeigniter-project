import React, { useEffect } from "react";
import { Link, useNavigate } from "react-router-dom";

export default function Header() {
  let navigate = useNavigate();
  // session clear
  const logout = () => {
    sessionStorage.clear();
    navigate("/login");
  };

  // Not entry Dashboard
  let fullname = sessionStorage.getItem("fullname");
  let setEmail = sessionStorage.getItem("email");
  // useEffect(() => {
  //   if (setEmail == null) {
  //     navigate("/login");
  //   }
  // }, []);

  return (
    <div class="container">
      <div class="row">
        

        <nav class="navbar navbar-expand-sm ">
        
          <Link class="navbar-brand" to="/"><img src="/assets/image/logo.png"/></Link>
    
              
            
          <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item">
                <Link class="nav-link active" to="/home">
                  Home
                </Link>
              </li>

              <li class="nav-item">
                <Link class="nav-link" to="/products">
                  All Product
                </Link>
              </li>

              <li class="nav-item">
                <Link class="nav-link" to="/registration">
                  Registration
                </Link>
              </li>

              <li class="nav-item">
                <a class="nav-link active"
                  href="http://localhost/inventory-react-php-mysql/Inventory-Management_php">
                  {/* href="Inventory-Management_php"> */}
                    Admin
                </a>
              </li>

              <span></span>
            </ul>
            <span className="navbar-text"> {setEmail} </span>
            <span>
              {fullname ? (
                <a onClick={logout} class="nav-link">
                  {fullname} | Logout
                </a>
              ) : (
                <Link to="/login" class="nav-link">
                  Login
                </Link>
              )}
            </span>
          </div>
        </nav>
      </div>
    </div>
  );
}
