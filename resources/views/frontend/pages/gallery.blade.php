@extends('frontend.inc.master')
@section('title', ' Gallaries')
@section('content')

    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>Gallary</h1>
                <ul>
                    <li><a href="index.html">DesignArabia</a></li>
                    <li>Gallary</li>
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

    <!-- Start of Portfolio  section
        ============================================= -->
    <section id="ori-portfolio-feed" class="ori-portfolio-feed-section position-relative">
        <div class="container">
            <div class="ori-portfolio-filter-btn ul-li text-center">
                <ul id="filters" class="nav-gallery">
                    <li class="filtr-button filtr-active" data-filter="all">see all</li>
                    @foreach($servicees as $serv)
                        <li class="filtr-button" data-filter="{{$serv->id}}">{{$serv->name_en}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="ori-portfolio-feed-item-wrapper filtr-container row">
                @foreach($images as $image)
                    <div class="col-lg-4 col-sm-6 filtr-item" data-category="{{$image->service_id }}" data-sort="{{$image->name }}">
                        <div class="ori-portfolio-item position-relative">
                            <div class="portfolio-img">
                                <img src="{{ url('public/serve/' . $image->name) }}" style="width: 500px; height: 300px">
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>



            </div>
{{--            <div  class="ori-portfolio-more-btn text-center">--}}
{{--                <div class="ori-btn-1 text-uppercase">--}}
{{--                    <a href="#">load more projects</a>--}}
{{--                </div>--}}
{{--            </div>--}}
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
    <!-- End of Portfolio  section
        ============================================= -->


@endsection
