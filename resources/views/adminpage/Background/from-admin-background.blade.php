@extends('layouts.admin')
@section('content')
        
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms Add/</span> Background</h4>

              <div class="row">
                <!-- Basic -->
                <div class="row">
                <div class="col-md-11.5">
                  <div class="card mb-6">
                    <h5 class="card-header">Detail</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <form action="{{ route('adminpage.background.add') }}" method="post"enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Detail"
                          aria-label="Detail"
                          aria-describedby="basic-addon11"
                          name="detail"
                        />
                      </div>

                      <h5>Image</h5>
                      <div class="input-group">
                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      
                      <Button type="submit" value="บันทึก" class="btn btn-success mt-3" >บันทึก</Button>
                      <a href="{{ route('adminpage.background.adminbackground') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                    </div>
                  </div>
                </div>
            </div>
            <!-- / Content -->

      @stop