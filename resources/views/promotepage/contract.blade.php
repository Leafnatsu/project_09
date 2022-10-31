@extends('layouts.promote')
@section('content')

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                ติดต่อเรา
            </p>
        </div>
    </div>

    

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <h1 style="color: #F9D38C">ข้อมูลการติดต่อ</h1>
            <A><H3><b>เบอร์โทรติดต่อ</b></H3></A>
        <li>
            <i class="fa fa-phone fa-fw"></i>
            <a class="text-decoration-none" href="tel:090-664-6949" style="color:#F9D38C"><b>090-664-6949</b></a>
        </li>
        <br>
        <br>
        <a><h3><b>อีเมลติดต่อ</b></h3></a>
        <li>
            <i class="fa fa-envelope fa-fw"></i>
            <a class="text-decoration-none" href="mailto:DoraChaTea@gmail.com" style="color: #F9D38C"><b>DoraChaTea@gmail.com</b></a>
        </li>
        </div>
    </div>
    <!-- End Contact -->

@stop