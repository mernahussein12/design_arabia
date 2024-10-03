@extends('frontend.inc.master')
@section('title', ' HomePage')
@section('content')


<!--<div class="about-items">-->
                <!--    <div class="about-icon">-->
                <!--        <img src="{{url('frontend/assets/images/resource/about-icn.png')}}" alt="">-->
                <!--    </div>-->
                <!--    <div class="about-item-content">-->
                <!--        <h2 class="about-item-title">Smart Repair System</h2>-->
                <!--        <p class="about-discription">Conveniently target business opportunities market-driven solutions</p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="row">-->
                <!--    <div class="col-lg-6 col-md-6">-->
                <!--        <div class="about-item-list">-->
                <!--            <ul>-->
                <!--                <li><i class="bi bi-check-circle-fill"></i> Repairing Roofing and Door</li>-->
                <!--                <li><i class="bi bi-check-circle-fill"></i> Repairing Roofing and Door</li>-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-lg-6 col-md-6">-->
                <!--        <div class="about-item-list">-->
                <!--            <ul>-->
                <!--                <li><i class="bi bi-check-circle-fill"></i> Repairing Roofing and Door</li>-->
                <!--                <li><i class="bi bi-check-circle-fill"></i> Repairing Roofing and Door</li>-->
                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="hendrio-button">-->
                <!--    <a href="blog-details.html">Get An Estimate <i class="bi bi-plus"></i></a>-->
                <!--</div>-->

<section id="ori-slider-1" class="ori-slider-section-1 position-relative" >
    <div class="ori-slider-content-wrapper-1 postion-relative">
        <div class="ori-slider-social position-absolute text-uppercase ul-li">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
            </ul>
        </div>
        <div class="ori-slider-wrap-1">
            @foreach($homesliders as $slider)
            <div  class="ori-slider-content-1 position-relative">
                <div class="ori-slider-text text-center  text-uppercase">
                    <h1>{!! $slider->text_en !!}
                    </h1>
                    {{--  <i class="fas fa-arrow-right"></i>--}}
                    <div class="slider-play-btn">
                      <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="http://youtube.com/watch?v=w68aM2klKhU">PLAY</a>
                    </div>
                    <div class="ori-slider-img position-absolute">
                        <img src="{{url('public/images/' . $slider->image) }}" alt="">
                    </div>
                </div>
            </div>
            @endforeach


{{--            <div class="ori-slider-content-1 position-relative">--}}
{{--                <div class="ori-slider-text text-center  text-uppercase">--}}
{{--                    <h1>Your Event <span>Journey</span>--}}
{{--                        Starts Here <i class="fas fa-arrow-right"></i>--}}
{{--                    </h1>--}}
{{--                    <div class="slider-play-btn">--}}
{{--                        <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="https://www.youtube.com/watch?v=O0pLvLtoESc">PLAY</a>--}}
{{--                    </div>--}}
{{--                    <div class="ori-slider-img position-absolute">--}}
{{--                        <img src="{{url('public/frontend/assets/img/slider/slider-1.png')}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="ori-slider-content-1 position-relative">--}}
{{--                <div class="ori-slider-text text-center  text-uppercase">--}}
{{--                    <h1>Your Event <span>Journey</span>--}}
{{--                        Starts Here <i class="fas fa-arrow-right"></i>--}}
{{--                    </h1>--}}
{{--                    <div class="slider-play-btn">--}}
{{--                        <a class="video_box d-flex align-items-center justify-content-center text-uppercase" href="https://www.youtube.com/watch?v=O0pLvLtoESc">PLAY</a>--}}
{{--                    </div>--}}
{{--                    <div class="ori-slider-img position-absolute">--}}
{{--                        <img src="{{url('public/frontend/assets/img/slider/slider-1.png')}}" alt="">--}}
{{--                    </div>--}}
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
    </div>
    <div  class="ori-slider-scroll position-absolute text-uppercase">
        <span>SCrool </span>
        <div class="scroll-mouse">
            <i class="fal fa-mouse"></i>
        </div>
    </div>
</section>

<section id="ori-service-1" class="ori-service-section-1">
    <div class="ori-service-wrapper-1">
        <div class="container">
            <div class="ori-service-top-content-1 d-flex justify-content-between align-items-center">
                <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h2>Who We Are  <span> And How We Plane</span></h2>
                </div>
                <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <a href="{{ route('serv')}}">Our services</a>
                </div>
            </div>
            <div class="ori-service-content-1">
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ori-service-inner-item position-relative">
                            <div class="ori-service-more position-absolute">
                                <a href="{{ route('about')}}"><i class="fas fa-arrow-right"></i></a>
{{--                                {{ route('about')}}--}}
                            </div>
                            <div class="ori-service-img-title position-relative">
                                <div class="ori-service-img">
                                    <img src="{{url('public/frontend/assets/img/About.jpg')}}" alt="">
                                </div>
                                <div class="ori-service-title text-center position-absolute">
                                    <h3>About Us  <i class="fal fa-arrow-right"></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="ori-service-inner-item position-relative">
                            <div class="ori-service-more position-absolute">
                                <a href="{{ route('mission')}}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="ori-service-img-title position-relative">
                                <div class="ori-service-img">
                                    <img src="{{url('public/frontend/assets/img/our-mission.jpg')}}" alt="">
                                </div>
                                <div class="ori-service-title text-center position-absolute">
                                    <h3>Our Mission  <i class="fal fa-arrow-right"></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="ori-service-inner-item position-relative">
                            <div class="ori-service-more position-absolute">
                                <a href="{{ route('approach')}}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="ori-service-img-title position-relative">
                                <div class="ori-service-img">
                                    <img src="{{url('public/frontend/assets/img/our-approach.jpg')}}" alt="">
                                </div>
                                <div class="ori-service-title text-center position-absolute">
                                    <h3>Our Approach  <i class="fal fa-arrow-right"></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{--gallary--}}


<section id="ori-portfolio-feed" class="ori-portfolio-feed-section position-relative">
    <div class="container">

        <div class="ori-portfolio-filter-btn ul-li text-center">
            <ul id="filters" class="nav-gallery">
                <li class="filtr-button filtr-active" data-filter="all">see all</li>

            @foreach($categoreis as $category)
                @foreach($category->services->take(1) as $service)
                    <li class="filtr-button" data-filter="{{$service->id}}">{{$service->name_en}}</li>
                @endforeach
                @endforeach


            </ul>
        </div>

        <div class="ori-portfolio-feed-item-wrapper filtr-container row">
{{--            @foreach($categoreis as $category)--}}
                @foreach($category->services->take(1) as $service)
            @foreach($service->images->take(4) as $image)
                <div class="col-lg-4 col-sm-6 filtr-item" data-category="{{$image->service_id }}" data-sort="{{$image->name }}">
                    <div class="ori-portfolio-item position-relative">
                        <div class="portfolio-img">
                            <img src="{{ url('public/serve/' . $image->name) }}" style="width: 500px; height: 300px">
                            <h3>{{$service->name_en}}</h3>
                        </div>

                    </div>
                </div>
            @endforeach
                @endforeach
            @endforeach
        </div>
        <div class="pt-5">
            <div class="ori-btn-1 text-uppercase text-center wow fadeInRight pt-5" data-wow-delay="300ms"
                 data-wow-duration="1500ms">
                <a href="{{ route('galleries') }}">See All Gallery</a>
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



<section id="ori-sponsor-1" class="ori-sponsor-section-1 position-relative">
    <div class="container">
        <div class="ori-sponsor-title text-uppercase text-center">
            <h3><i></i> <span>Trusted by</span> <i></i></h3>
        </div>
        <div class="ori-sponsor-content">
            <div class="ori-sponsor-slider">
                @foreach($clients as $client)
                    <div class="ori-sponsor-item">
                        <div class="ori-sponsor-img">

                            <img src="{{ url('public/clients/' . $client->image) }}" style="height: 120px;" alt="">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

    <div class="pt-5">
        <div class="ori-btn-1 text-uppercase text-center wow fadeInRight pt-5" data-wow-delay="300ms"
             data-wow-duration="1500ms">
            <a href="{{ route('client') }}">See All Clients</a>
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

{{--<!-- End of Project section--}}
{{--============================================= -->--}}

{{--<!-- Start of Text scroll section--}}
{{--============================================= -->--}}
{{--<section id="ori-text-scroll-1" class="ori-text-scroll-section-1 position-relative">--}}
{{--    <div class="ori-text-scroll-content">--}}
{{--        <div class="ori-text-scroll-item-1 text-uppercase">--}}
{{--            <h3>Creative Digital <span>Studio</span></h3>--}}
{{--            <span class="ori-text-scroll-icon"><i class="fas fa-star"></i></span>--}}
{{--            <h3>Creative Digital <span>Agency</span></h3>--}}
{{--            <span class="ori-text-scroll-icon"><i class="fas fa-star"></i></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="line_animation">--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- End of Text scroll section--}}
{{--============================================= -->--}}

{{--<!-- Start of Team section--}}
{{--============================================= -->--}}
{{--<section id="ori-team-1" class="ori-team-section-1 position-relative">--}}
{{--    <div class="ori-team-content-area">--}}
{{--        <div class="container">--}}
{{--            <div class="ori-team-top-content-1 d-flex justify-content-between align-items-center">--}}
{{--                <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">--}}
{{--                    <h2>Meet our team of <span>professional</span></h2>--}}
{{--                </div>--}}
{{--                <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">--}}
{{--                    <a href="team.html">all Team Member</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="ori-team-content-1">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">--}}
{{--                        <div class="ori-team-inner-item position-relative">--}}
{{--                            <div class="ori-team-img">--}}
{{--                                <img src="{{url('public/frontend/assets/img/team/tm1.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="ori-team-text text-center position-absolute">--}}
{{--                                <h3><a href="team-single.html">Alextina Ditarson</a></h3>--}}
{{--                                <span>GRAPHIC DESIGNER</span>--}}
{{--                            </div>--}}
{{--                            <div class="ori-team-social text-center position-absolute">--}}
{{--                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">--}}
{{--                        <div class="ori-team-inner-item position-relative">--}}
{{--                            <div class="ori-team-img">--}}
{{--                                <img src="{{url('public/frontend/assets/img/team/tm2.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="ori-team-text text-center position-absolute">--}}
{{--                                <h3><a href="team-single.html">Alextina Ditarson</a></h3>--}}
{{--                                <span>GRAPHIC DESIGNER</span>--}}
{{--                            </div>--}}
{{--                            <div class="ori-team-social text-center position-absolute">--}}
{{--                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">--}}
{{--                        <div class="ori-team-inner-item position-relative">--}}
{{--                            <div class="ori-team-img">--}}
{{--                                <img src="{{url('public/frontend/assets/img/team/tm3.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="ori-team-text text-center position-absolute">--}}
{{--                                <h3><a href="team-single.html">Alextina Ditarson</a></h3>--}}
{{--                                <span>GRAPHIC DESIGNER</span>--}}
{{--                            </div>--}}
{{--                            <div class="ori-team-social text-center position-absolute">--}}
{{--                                <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="line_animation">--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- End of Team section--}}
{{--============================================= -->--}}

{{--<!-- Start of Testimonial section--}}
{{--============================================= -->--}}
<section id="ori-testimonial-1" class="ori-testimonial-section-1 position-relative">
    <div class="ori-vector-bg position-absolute wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
        <img src="{{url('public/frontend/assets/img/vector/tst-vector1.png')}}" alt="">
    </div>
    <div class="container">
        <div class="ori-testimonial-content-1 position-relative">
            <div class="ori-testimonial-title text-center text-uppercase">
                <h3>What our Client say</h3>
            </div>
            <div class="ori-testimonial-slider-1">
                <div class="ori-testimonial-item-area">
                    <div class="ori-testimonial-item-1">
                        <div class="ori-testimonial-text text-center pera-content">
                            <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                            </p>
                            <div class="ori-testimonial-author text-center text-uppercase">
                                <h4>Hahimlam Dirat</h4>
                                <span>ui/ux Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ori-testimonial-item-area">
                    <div class="ori-testimonial-item-1">
                        <div class="ori-testimonial-text text-center pera-content">
                            <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                            </p>
                            <div class="ori-testimonial-author text-center text-uppercase">
                                <h4>Hahimlam Dirat</h4>
                                <span>ui/ux Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ori-testimonial-item-area">
                    <div class="ori-testimonial-item-1">
                        <div class="ori-testimonial-text text-center pera-content">
                            <p>“Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it. Our office is additionally a big name.”
                            </p>
                            <div class="ori-testimonial-author text-center text-uppercase">
                                <h4>Hahimlam Dirat</h4>
                                <span>ui/ux Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_nav">
                <button type="button" class="testi-left_arrow"><img src="{{url('public/frontend/assets/img/vector/prev.png')}}" alt=""></button>
                <button type="button" class="testi-right_arrow"><img src="{{url('public/frontend/assets/img/vector/next.png')}}" alt=""></button>
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
{{--<!-- End of Testimonial section--}}
{{--============================================= -->--}}

{{--<!-- Start of Text scroll section--}}
{{--============================================= -->--}}
<section id="ori-text-scroll-2" class="ori-text-scroll-section-2 position-relative">
    <div class="ori-text-scroll-content">
        <div class="ori-text-scroll-item-2 clearfix text-uppercase">
            <h3>Creative Digital <span>Studio</span></h3>
            <span class="ori-text-scroll-icon"><i class="fas fa-star"></i></span>
            <h3>Creative Digital <span>Agency</span></h3>
            <span class="ori-text-scroll-icon"><i class="fas fa-star"></i></span>
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
{{--<!-- End of Text scroll section--}}
{{--============================================= -->--}}

{{--<!-- Start of Blog section--}}
{{--============================================= -->--}}
{{--<section id="ori-blog-1" class="ori-blog-section-1 position-relative">--}}
{{--    <div class="container">--}}
{{--        <div class="ori-blog-top-content-1 d-flex justify-content-between align-items-center">--}}
{{--            <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">--}}
{{--                <h2>latest <span>posts</span></h2>--}}
{{--            </div>--}}
{{--            <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">--}}
{{--                <a href="blog.html">See all blogs</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="ori-blog-content-1">--}}
{{--            <div class="row">--}}
{{--                @foreach($blogs as $blog)--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">--}}
{{--                        <div class="ori-blog-inner-item">--}}
{{--                            <div class="blog-inner-img">--}}
{{--                                <img style="width: 415px;height: 274px;object-fit: cover;" src="{{ url('public/blogs/' . $blog->image) }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="blog-inner-text">--}}
{{--                                <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->name }}</a></h3>--}}
{{--                                <a class="read-more text-uppercase" href="{{ route('blogs.show', $blog->id) }}">Read more <i class="fal fa-chevron-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--    </div>--}}
{{--    </div>--}}
{{--    <div class="line_animation">--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--        <div class="line_area"></div>--}}
{{--    </div>--}}
{{--</section>--}}


<section id="ori-blog-1" class="ori-blog-section-1 position-relative">
    <div class="container">
        <div class="ori-blog-top-content-1 d-flex justify-content-between align-items-center">
            <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms"
                 data-wow-duration="1500ms">
                <h2>latest <span>posts</span></h2>
            </div>
            <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <a href="{{route('blogs')}}">See all blogs</a>
            </div>
        </div>
        <div class="ori-blog-content-1">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ori-blog-inner-item">
                            <div class="blog-inner-img">
                                <img src="{{ url('public/blogs/' . $blog->image) }}" alt="">
                            </div>
                            <div class="blog-inner-text">
                                <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->name }}</a></h3>
                                <a class="read-more text-uppercase" href="{{ route('blogs.show', $blog->id) }}">Read
                                    more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
@endsection
