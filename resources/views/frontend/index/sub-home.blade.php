@extends('frontend.index.admin')
@section('content')

<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Subcategories</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- shop-area start -->
    <section class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- tab content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                @foreach($subcategories as $subcat)
                                <div class="col-lg-3 col-md-6">
                                    <form method="POST" action="{{route('payment.store')}}">
                                        @csrf
                                        <div class="product-wrapper mb-25 shop">
                                            <div class="product-img mb-25">
                                                <a href="#">
                                                    <img src="{{asset('image/'.$subcat->photo)}}" oncontextmenu="return false">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h4>
                                                    <a href="#">{{$subcat->title}}</a>
                                                    <div class="by m-2">
                                                        <button class="btn btn-primary">Buy Now</button>
                                                        <h3>$200</h3>
                                                    </div>
                                                </h4>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area end -->


</main>
@endsection