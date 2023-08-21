@extends('frontend.index.admin')
@section('content')
<!-- slider-area start -->
<section class="slider-area pos-relative">
    <div class="slider-active slick-initialized slick-slider"><button type="button" class="slick-prev slick-arrow" style="display: block;"> <i class="fas fa-arrow-left"></i> </button>
        <div class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 4047px;">
                <div class="single-slider slide-1-style slide-height d-flex align-items-center slick-slide slick-current slick-active" data-background="{{asset('img/new-slide2.jpg')}}" data-slick-index="0" style="background-image: url(&quot;assert/slider/slider-1.jpg&quot;); width: 1349px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" aria-hidden="false" tabindex="0">
                    <div class="shape-icon bounce-animate">
                    </div>
                    <div class="container-fluid">
                        <div class="row">

                        </div>
                    </div>
                </div>
                <div class="single-slider slide-1-style slide-height d-flex align-items-center slick-slide" data-background="assert/slider/new-slide2.jpg" data-slick-index="1" style="background-image: url(&quot;assert/slider/new-slide2.jpg&quot;); width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 998; opacity: 0;" aria-hidden="true" tabindex="-1">
                    <div class="shape-icon bounce-animate">
                    </div>
                    <div class="container-fluid">
                        <div class="row">

                        </div>
                    </div>
                </div>
                <div class="single-slider slide-1-style slide-height d-flex align-items-center slick-slide" data-background="assert/slider/new-slide3.jpg" data-slick-index="2" style="background-image: url(&quot;assert/slider/new-slide3.jpg&quot;); width: 1349px; position: relative; left: -2698px; top: 0px; z-index: 998; opacity: 0;" aria-hidden="true" tabindex="-1">

                    <div class="shape-icon bounce-animate">

                    </div>
                    <div class="container-fluid">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="slick-next slick-arrow" style="display: block;"> <i class="fas fa-arrow-right"></i></button>
    </div>
</section>
<section class="team-area pt-100 pb-70" style="background:#f5f5f5;">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="area-title text-center mb-50">
                    <h2>Our Categories</h2>
                    <!-- <p>Our one of the best team members</p>-->
                </div>
            </div>
        </div>
        <div class="row">
            @foreach( $categories as $cat)
            <div class="col-lg-3 col-md-6">
                <div class="team mb-30">
                    <div class="team__img">
                        <img src="{{asset('image/'.$cat->photo)}}" oncontextmenu="return false">
                    </div>
                    <div class="team__content text-center white-bg">
                        <a href="{{route('subcategory')}}">
                            <h4>{{$cat->name}}</h4>
                        </a>
                    </div>
                </div>
                <div class="col-xl-1 d-lg-none d-xl-block"></div>
            </div>
            @endforeach
        </div>
</section>
@endsection