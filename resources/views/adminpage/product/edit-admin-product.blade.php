@extends('layouts.admin')
@section('content')
        
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms Edit/</span> product</h4>

              <div class="row">
                <!-- Basic -->
                <div class="row">
                  <div class="col-md-11.5">
                    <div class="card mb-6">
                      <div class="card-body demo-vertical-spacing demo-only-element">
                        <form action="{{ route('adminpage.product.update',$product->id) }}" method="post"enctype="multipart/form-data">
                          @csrf
                          <h5>Typeproduct</h5>
                          <div class="input-group">
                            <select name="id_type_product" class="form-control">
                              @foreach ($typeproduct as $item)
                              <option value="{{$item->id}}"> {{$item->name}} </option>
                              @endforeach
                            </select>
                          </div>
                            
                            <h5>Name</h5>
                            <div class="input-group">
                          <input
                          type="text"
                          class="form-control"
                          placeholder="Name"
                          aria-label="Name"
                          aria-describedby="basic-addon11"
                          name="name" value="{{$product->name}}"
                          />
                        </div>
                        
                        <h5>Detail</h5>
                        <div class="input-group">
                            <input
                            type="text"
                          class="form-control"
                          placeholder="Detail"
                          aria-label="Detail"
                          aria-describedby="basic-addon11"
                          name="detail" value="{{$product->detail}}"
                            />
                          </div>
                          
                          <h5>Price</h5>
                          <div class="input-group">
                              <input
                              type="text"
                            class="form-control"
                            placeholder="Price"
                            aria-label="Price"
                            aria-describedby="basic-addon11"
                            name="price" value="{{$product->price}}"
                            />
                          </div>
                          
                          <h5>Image</h5>
                          <div class="input-group">
                            <input type="file" name="image" value="{{$product->image}}" class="form-control" id="inputGroupFile02" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>
                          
                          <Button type="submit" value="??????????????????" class="btn btn-success mt-3" >??????????????????</Button>
                          <a href="{{ route('adminpage.product.adminproduct') }}" class="btn btn-danger mt-3 mx-2">????????????????????????</a>
                        </div>
                      </div>
                    </div>
              </form>
            </div>
            <!-- / Content -->

      @stop