@extends('layouts.admin')
@section('content')
        
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> user</h4>

              <div class="row">
                <!-- Basic -->
                <div class="row">
                <div class="col-md-11.5">
                  <div class="card mb-6">
                    <h5 class="card-header">Name</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Name"
                          aria-label="Name"
                          aria-describedby="basic-addon11"
                        />
                      </div>

                      <h5>Email</h5>
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Email"
                            aria-label="Email"
                            aria-describedby="basic-addon11"
                          />
                        </div>

                      <div class="form-password-toggle">
                      <h5>Password</h5>
                        <div class="input-group">
                          <input
                            type="password"
                            class="form-control"
                            id="basic-default-password12"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="basic-default-password2"
                          />
                          <span id="basic-default-password2" class="input-group-text cursor-pointer"
                            ><i class="bx bx-hide"></i
                          ></span>
                        </div>
                      </div>

                      <h5>Phone</h5>
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Phone"
                          aria-label="Phone"
                          aria-describedby="basic-addon11"
                        />
                      </div>
                      <a href="" class="btn btn-success"> 
     
                        ตกลง
                    
                          </a>
                      <a href="" class="btn btn-danger"> 
     
                        ลบ
                        
                          </a>
                    </div>
                  </div>
                </div>
            </div>
            <!-- / Content -->
      @stop