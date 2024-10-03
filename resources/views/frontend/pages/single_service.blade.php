@extends('frontend.inc.master')
@section('title', '  page Services')
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
                                    <img src="{{ url('public/services/' . $service->image) }}">
                                </div>

                            </div>
                            <div class="ori-service-details-text pera-content ">
                                <h2>{{ $service->name_en}}</h2>
                                <p > {!! $service->body !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ori-service-details-sidebar-widget-area">
                            <div class="ori-service-details-widget ul-li-block">
                                <div class="category-widget">
                                    <h3 class="widget-title">{{$service->category->name_en}}  Services</h3>
                                        <ul>
                                            @foreach($servicees as $servicee)

                                            <li><a  href="{{ route('Services', $servicee->id) }}">{{$servicee->name_en}}</a></li>
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



    <section id="ori-blog-1" class="ori-blog-section-1 position-relative">
        <div class="container">
            <div class="ori-blog-top-content-1 d-flex justify-content-between align-items-center">
                <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
{{--                    <h2><span> {{$service->name_en}}</span></h2>--}}
                </div>
            </div>
            <div class="ori-blog-content-1">
                <div class="row">

                    @foreach($service->images as $image)

                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="ori-blog-inner-item">
                                <div class="blog-inner-img">
                                    <img src="{{ url('public/serve/' . $image->name) }}" style="width: 500px; height: 250px">
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms" style="padding-left: 35%; padding-bottom: 15px;">
                    <a href="{{route('galleries')}}">See all Gallary </a>
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




    {{--    <section id="ori-text-scroll-1" class="ori-text-scroll-section-1 position-relative">--}}
{{--        <div class="ori-text-scroll-content">--}}
{{--            @foreach ($images as $image)--}}
{{--                @if ($image->service_id == $service->id)--}}
{{--                <div class="ori-text-scroll-item-1 text-uppercase">--}}
{{--                    <img src="{{ url('public/serve/' . $image->name) }}" alt="" style="width: 200px; height: 200px;">--}}
{{--                </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="line_animation">--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--            <div class="line_area"></div>--}}
{{--        </div>--}}

{{--    </section>--}}








@endsection