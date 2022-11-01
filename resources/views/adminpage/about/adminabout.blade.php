@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span>About</h4>
    <a href="{{ route('adminpage.about.from_add') }}" class="btn btn-primary"> 
     
    เพิ่มข้อมูล

      </a>
      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">Table About</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>created_at</th>
                <th>updated_at</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($abouts as $item)
              <tr>
              <td>{{ $abouts->firstItem()+$loop->index}}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->image }}</td>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->updated_at }}</td>
              {{-- <td>
                <a href="{{ route('about.edit',$item->id) }}"><i class='bx bxs-edit'>Edit</i></a>
                <a href="{{ route('about.delete',$item->id) }}"><i class='bx bx-trash'>Delete</i></a>
              </td> --}}
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->


      <hr class="my-5">

     


    <div class="content-backdrop fade"></div>
  </div>

@stop