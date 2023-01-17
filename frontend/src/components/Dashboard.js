import React, { useEffect } from "react";
import { useNavigate } from "react-router-dom";

export default function Dashboard() {

  let navigate = useNavigate();
  // session clear
  const logout = () => {
    sessionStorage.clear();
    navigate("/login");
  };

  // Not entry Dashboard
  let fullname = sessionStorage.getItem("fullname");
  let setEmail = sessionStorage.getItem("email");
  useEffect(() => {
    if (setEmail == null) {
      navigate("/login");
    }
  }, []);
  return (
    <>
      <div className="container">
        <div className="jumbotron">
          <h1>Welcome to Dashboard</h1>
        </div>
      </div>
      <div className="container bg-light">
        <p>
          Hello, {sessionStorage.getItem("fullname")} to Dashboard!
        </p>
      </div>
    </>
  );
}
