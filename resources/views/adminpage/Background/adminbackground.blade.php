@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Background</h4>
   <a href="/admin/background/from" class="btn btn-primary"> 
     
    ปุ่มเพิ่ม

      </a>
      <!-- Basic Bootstrap Table -->
      <div class="card">
        <h5 class="card-header">Table Background</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Detail</th>
                <th>Image</th>
                <th>created_at</th>
                <th>updated_at</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($background as $item)
              <tr>
              <td>{{ $background->firstItem()+$loop->index}}</td>
              <td>{{ $item->detail }}</td>
              <td>{{ $item->image }}</td>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->updated_at }}</td>
              <td>
                <a href="{{ route('adminpage.background.edit',$item->id) }}"><i class='bx bxs-edit'>Edit</i></a>
                <a href="{{ route('adminpage.background.delete',$item->id) }}"><i class='bx bx-trash'>Delete</i></a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!--/ Basic Bootstrap Table -->
  
  
      <hr class="my-5">
  
      {{ $background->links('pagination::bootstrap-5') }}
  
  
    <div class="content-backdrop fade"></div>
  </div>
  
  @stop