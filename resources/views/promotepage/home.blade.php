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



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src=" {{ asset('template/promote/assets/img/ชานมไข่มุก.jpg') }}  " alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>ชานมไข่มุก</b> <b>Bubble Tea</b></h1>
                                <h3 class="h2"></h3>
                                <p>
                                    ชมนมไข่มุก <a rel="sponsored"   target="_blank">Doracha</a> Bubble 
                                    Tea<a rel="sponsored"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src=" {{ asset('template/promote/assets/img/ชาเขียว.jpg') }} " alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>ชาเขียว</b> <b> Green Tea Latte</b></h1>
                                ชาเขียว<a rel="sponsored"   target="_blank">Doracha</a> Bubble 
                                    Tea<a rel="sponsored"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src=" {{ asset('template/promote/assets/img/ชานม.jpg') }} " alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>ชานม</b> <b>Milk Tea</b></h1>
                                ชมนม<a rel="sponsored"   target="_blank"> Doracha</a> Bubble 
                                    Tea<a rel="sponsored"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <B class="h1"><B>Beverage</B>
                <p>
                    เครื่องดื่มในร้าน
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <br>
                <img src=" {{ asset('template/promote/assets/img/ชานม.jpg') }} " class="rounded-circle img-fluid border" height="600"> </a>
                <h5 class="text-center mt-3 mb-3">ชานม</h5>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src=" {{ asset('template/promote/assets/img/ชาเขียว.jpg') }} " class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">ชาเขียว</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src=" {{ asset('template/promote/assets/img/ชานมมัชชะ.jpg') }} " class="rounded-circle img-fluid border"></a>
                <br>    
                <h2 class="h5 text-center mt-3 mb-4">ชานมมัชชะ</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
        </div>
        </section>
        <section class="container py-5">
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src=" {{ asset('template/promote/assets/img/ส้มยูสุโซดา.jpg') }} " class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">ส้มยูสุโซดา</h5>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src=" {{ asset('template/promote/assets/img/ชานมลาเต้.jpg') }} " class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">ชานมลาเต้</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src=" {{ asset('template/promote/assets/img/มัทฉะสตอเบอรี่.jpg') }} " class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">มัทฉะสตอเบอรี่</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
        </div>
        </section>

        
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"><b>Recomended Menu</b></h1>
                    <p>
                        เมนูแนะนำ
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('template/promote/assets/img/ชามะลิ.jpg') }}" class="card-img-top" height="280" alt="..."> 
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
                                <li class="text-muted text-right">55THB</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">ชามะลิ</a>
                            <p class="card-text">
                                Bubble Tea
                            </p>
                            <p class="text-muted">Reviews (16)</p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('template/promote/assets/img/ชานม3.jpg') }}" class="card-img-top"alt="...">
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
                                <li class="text-muted text-right">40THB</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">ชานม</a>
                            <p class="card-text">
                                Bubble Tea
                            </p>
                            <p class="text-muted">Reviews (37)</p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('template/promote/assets/img/นมชมพู.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">40THB</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">นมชมพู</a>
                            <p class="card-text">
                                Bubble Tea
                            </p>
                            <p class="text-muted">Reviews (34)</p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


@stop