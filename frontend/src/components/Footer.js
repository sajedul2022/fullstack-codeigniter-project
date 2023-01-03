import React from "react";

export default function Footer() {
  return (
    <div>
      <section class="py-6 pb-0">
        <div class="container">
          <hr class="text-info opacity-25" />
          <div class="row py-7 justify-content-sm-between text-center text-md-start">
            <div class="col-md-6">
              <h1 class="fw-bold">Try for free!</h1>
              <p>Get limited 1 week free try our features!</p>
            </div>
            <div class="col-md-6 text-lg-end">
              <a
                class="btn btn-lg btn-danger rounded-pill me-4 me-md-3 me-lg-4"
                href="#"
                role="button"
              >
                Learn more
              </a>
              
            </div>
          </div>
          <div class="row justify-content-lg-around">
            <div class="col-12 col-sm-12 col-lg-3 mb-4 order-0 order-sm-0">
              <a class="text-decoration-none" href="#">
                <img
                  class="img-fluid me-3"
                  src="assets/img/icons/logo.png"
                  alt=""
                />
                <span class="fw-bold fs-1 text-1000">Warehouse</span>
              </a>
              <p class="mt-4">
                Warehouse, 234 <br />
                Dhanmondhi, Dhaka 1230
              </p>
              <p>
                info@warehouse.project
                <br />
                +88016785622 (Main){" "}
              </p>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
              <h6 class="lh-lg fw-bold mb-4">About</h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Profile
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Features
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Careers
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    DW News
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
              <h6 class="lh-lg fw-bold mb-4"> Help </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Support
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Sign Up{" "}
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Guide
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Reports
                  </a>
                </li>
                <li class="lh-lg">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    Q&amp;A
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-sm-4 col-lg-3 mb-3 order-1 order-sm-3">
              <h6 class="lh-lg fw-bold mb-4">Social Media </h6>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="list-inline-item">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    <img
                      class="img-fluid"
                      src="assets/img/icons/f.png"
                      width="40"
                      alt=""
                    />
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    <img
                      class="img-fluid"
                      src="assets/img/icons/t.png"
                      width="40"
                      alt=""
                    />
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="text-dark fs--1 text-decoration-none" href="#!">
                    <img
                      class="img-fluid"
                      src="assets/img/icons/i.png"
                      width="40"
                      alt=""
                    />
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Copyright (c) All rights reserved 2022 By Sajedul WareHouse</p>
      </div>
    </div>
  );
}
