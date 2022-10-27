@extends('layouts.admin')
@section('content')
        
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms Edit/</span>type product</h4>

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

                      <h5>Image</h5>
                      <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
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