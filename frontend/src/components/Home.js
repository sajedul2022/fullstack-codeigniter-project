import React from "react";
import { Link } from "react-router-dom";

export default function Home() {
  return (
    <>
      {/* warehouse header section */}
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-7 order-md-1 pt-8">
              <img
                class="img-fluid"
                src="assets/img/illustrations/hero-header.png"
                alt=""
              />
            </div>
            <div class="col-md-7 col-lg-5 text-center text-md-start pt-5 pt-md-9">
              <h1 class="mb-4 display-2 fw-bold">
                Save your Time <br class="d-block d-lg-none d-xl-block" />
                storage here.
              </h1>
              <p class="mt-3 mb-4">
                Product Warehouse is a Product storage area that <br />
                has been tested for security, so you can store
                <br />
                your Product here safely but not be afraid of <br />
                being stolen by others.
              </p>
              <Link
                class="btn btn-lg btn-info rounded-pill"
                to="/products"
                role="button"
              >
                All Stock
              </Link>
            </div>
          </div>
        </div>
      </section>

      

    {/* High Level section */}
      <section class="py-4">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card mb-3 bg-soft-danger rounded-3">
                <div class="row g-0 align-items-center">
                  <div class="col-md-5 col-lg-6 text-md-center">
                    <img
                      class="img-fluid"
                      src="assets/img/illustrations/about.png"
                      alt=""
                    />
                  </div>
                  <div class="col-md-7 col-lg-6 px-md-2 px-xl-6 text-center text-md-start">
                    <div class="card-body px-4 py-5 p-lg-3 p-md-4">
                      <h1 class="mb-4 fw-bold">
                        We are a high-level Product 
                        <br class="d-md-none d-xxl-block" />
                          storage bank
                      </h1>
                      <p class="card-text">
                        The place to store various data that you can access at
                        any
                        <br class="d-none d-xxl-block" />
                        time through the internet and where you can carry it.{" "}
                        <br class="d-none d-xxl-block" />
                        This very flexible storage area has a high level of
                        security.
                        <br class="d-none d-xxl-block" />
                        To enter into your own data you must enter the password
                        <br class="d-none d-xxl-block" />
                        that you created when you registered in this Data{" "}
                        <br class="d-none d-xxl-block" />
                        Warehouse.{" "}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Mission  */}

      <div class="container">
        <h1 class="text-center">At a Glance</h1> <hr />
        <div class="p-5 jamb bg-primary  text-center"></div>
        <div class="row">
          <div class="col-md-4  ">
            <h2 class="box-title">About US</h2>
            <p text-center>
              We strongly believe that pursuing all of these goals is in our
              interest and in the interest of all of our stakeholders are us
              customers, employees, investors and the planet as a whole. We add
              value to cargo peoples interaction with us.
            </p>
          </div>

          <div class="col-md-4">
            <h2 class="box-title">Our Mission</h2>
            <div class="desc ">
              We meet our customers demands for a personal &amp; profesional
              service by offering innovative supply chain solutions.We add value
              to cargo peoples interaction with us, with excellent services or
              products.
            </div>
          </div>

          <div class="col-md-4">
            <h2 class="box-title">Our Vision</h2>
            <div class="desc">
              We meet our customers demands for a personal &amp; profesional
              service by offering innovative supply chain solutions.We add value
              to cargo peoples interaction with us, with excellent services or
              products.
            </div>
          </div>
        </div>
      </div>

      {/* Features */}


    </>
  );
}


