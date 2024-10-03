@extends('frontend.inc.master')
@section('title', ' Category Services')
@section('content')

    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png'">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>Services Details</h1>
                <ul>
                    <li><a href="{{ url('/') }}">DesignArabia</a></li>
                    <li>Services Details</li>
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

    <!-- Start of Service Details  section
        ============================================= -->
    <section id="ori-service-details" class="ori-service-details-section position-relative">
        <div class="container">
            <div class="ori-service-details-content-wrapper">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ori-service-details-content">
                            <div class="ori-about-play-area position-relative">
                                <div class="ori-about-play-img">
                                    <img src="{{ url('public/services/' . $servicee->image) }}">
                                </div>

                            </div>
                            <div class="ori-service-details-text pera-content ">
                                <h2>{{ $servicee->name_en}}</h2>
                                <p > {!! $servicee->text !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ori-service-details-sidebar-widget-area">
                            <div class="ori-service-details-widget ul-li-block">
                                <div class="category-widget">
                                    <h3 class="widget-title">Services</h3>
                                    @foreach($cat_services as $serv)
                                        <ul>
                                            <li><a  href="{{ route('Services', $serv->id) }}">{{$serv->name_en}}</a></li>
                                            @endforeach
                                        </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
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
    <!-- End of Service Details  section
        ============================================= -->


@endsection