@extends('frontend.inc.master')
@section('title', ' Our Client')
@section('content')
    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative"
             data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>Our Clients</h1>
                <ul>
                    <li><a href="{{ url('/') }}">Designarabia</a></li>
                    <li>Our Clients</li>
                </ul>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Breadcrumbs section
        ============================================= -->

    <!-- Start of Shop Feed Post section
	============================================= -->
    <section id="ori-shop-feed" class="ori-shop-feed-section">
        <div class="container">
            <div class="ori-shop-feed-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ori-shop-feed-post-content">
                            <div class="ori-shop-feed-post-items">
                                <div class="row">
                                    @foreach($clients as $client)
                                        <div class="col-md-3 col-6">
                                            <div class="ori-shop-inner-item text-center">
                                                <div class="shop-img-cart-btn position-relative">
                                                    <div class="shop-img">
                                                        <a target="_blank" href="{{$client->link}}">
                                                            <img src="{{ url('public/clients/' . $client->image) }}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Shop Feed Post  section
        ============================================= -->




@endsection
