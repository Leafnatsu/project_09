@extends('layouts.promote')
@section('content')

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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



<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    @foreach($backgrounds as $item)
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src=" {{ asset('admin/upload/backgrounds/'.$item->image)}}  " alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>{{ $item->detail }}</b> <b>Tea</b></h1>
                            <h3 class="h2"></h3>
                            <p>
                                {{ $item->detail }} <a rel="sponsored" target="_blank">Doracha</a> Bubble
                                Tea<a rel="sponsored"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
        role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>

</div>
@endforeach
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <B class="h1"><B>Type of Menu</B>
                <p>
                    ประเภทเมนูเครื่องดื่มในร้าน
                </p>
        </div>
    </div>
    <div class="row">
        @foreach($typeproduct as $item)
        <div class="col-12 col-md-4 p-5 mt-3">
            <br>
            <a href="#"><img src="{{ asset('admin/upload/type_product/'.$item->image)}}"
                    class="rounded-circle img-fluid border" height="600"> </a>
            <h5 class="text-center mt-3 mb-3">{{ $item->name }}</h5>
        </div>
        @endforeach
    </div>

</section>
<section class="container py-5">
    </div>
</section>
<!-- End Categories of The Month -->
<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1"><b>Beverage</b></h1>
                <p>
                    เมนูแนะนำ
                </p>
            </div>
            <div class="row">
                @foreach($product as $item)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('admin/upload/product/'.$item->image)}}" class="card-img-top"
                                height="280" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">{{ $item->price }}</li>
                            </ul>
                            <a>{{ $item->name }}</a>
                            <p class="card-text">
                                {{ $item->detail }}
                            </p>
                            <p class="text-muted">Reviews (16)</p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('template/promote/assets/img/history.jpg')}} " class="img-fluid rounded-start" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">HISTORY OF BUBBLE TEA</h5>
                        <p class="card-text">ร้านชาชุน ฉุ่ยถังในเมืองไถจง น่าจะเป็นร้านแรกที่คิดค้นเมนูชาไข่มุกขึ้นมา
                            เมื่อปี 1988 ขณะที่กำลังประชุมอยู่นั้น คุณหลินชิ่วฮุย (ผู้จัดการฝ่ายพัฒนาผลิตภัณฑ์)
                            ได้เทขนมหวานชิ้นเล็ก ๆ ลงไปในชา ทุกคนในห้องประชุมเห็นว่าน่าสนใจ จึงทำออกมาขาย ปรากฏว่า
                            ยอดขายดีมาก ทำลายสถิติเครื่องดื่มชนิดอื่น ๆ บ้างก็ว่า ชาไข่มุกน่าจะมีที่มาจากร้านชาหานหลิน
                            ที่เมืองไถหนาน ประเทศไต้หวัน ของนายถัวซ่งเหอ เขาใส่เม็ดสาคูสีขาวลงไปในชา
                            ทำให้มันเหมือนไข่มุก เป็นที่มาของคำว่า "ชาไข่มุก" หลังจากนั้นไม่นาน
                            หานหลินเปลี่ยนสีสาคูจากสีขาวเป็นสีดำแบบที่นิยมกันในปัจจุบัน ช่วงปี 1990
                            เครื่องดื่มชนิดนี้เป็นที่นิยมมากในเอเชียตะวันออก และ เอเชียตะวันออกเฉียงใต้</p>
                        <p class="card-text"><small class="text-muted">แหล่งอ้างอิงจากเว็บไซต์ https://www.sanook.com</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Featured Product -->


        @stop
