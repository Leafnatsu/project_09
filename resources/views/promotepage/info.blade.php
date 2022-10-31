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
            <h1 class="h1">Store Located</h1>
            <p>
                ที่ตั้งร้านค้า
            </p>
        </div>
    </div>



<!-- Start Banner Hero -->

<div class="mapouter">
    <div class="gmap_canvas"><iframe style='display: block; margin: 100 auto;'  class="gmap_iframe" position frameborder="0" scrolling="no" marginheight="" marginwidth="0" 
            src="https://maps.google.com/maps?width=800px&amp;height=600&amp;hl=en&amp;q=315/293 ถ.จรัญสนิทวงศ์ แขวง บางอ้อ เขตบางพลัด กรุงเทพมหานคร 10700&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
            href="https://mcpenation.com/">MCPE Nation</a></div></div>
    <style>
        .mapouter {
            position: relative;
            text-align: right;
            width: 600px;
            height: 400px;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 600px;
            height: 400px;
        }

        .gmap_iframe {
            width: 600px !important;
            height: 400px !important;
        }

    </style>
</div>

<!--The div element for the map -->
<div id="map"></div>
<div class="carousel-item">
    <div class="container">
        <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                    <h1 class="h1">Proident occaecat</h1>
                    <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                    <p>
                        You are permitted to use this Zay CSS template for your commercial websites.
                        You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of
                        template collection websites.
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
                <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
                <div class="text-align-left">
                    <h1 class="h1">Repr in voluptate</h1>
                    <h3 class="h2">Ullamco laboris nisi ut </h3>
                    <p>
                        We bring you 100% free CSS templates for your websites.
                        If you wish to support TemplateMo, please make a small contribution via PayPal or tell your
                        friends about our website. Thank you.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button"
    data-bs-slide="prev">
    <i class="fas fa-chevron-left"></i>
</a>
<a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button"
    data-bs-slide="next">
    <i class="fas fa-chevron-right"></i>
</a>
</div>
<!-- End Banner Hero -->

@stop
