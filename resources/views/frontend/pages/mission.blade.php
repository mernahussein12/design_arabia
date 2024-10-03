@extends('frontend.inc.master')
@section('title', ' Mission')
@section('content')


    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative"
             data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>Our Mission</h1>
                <ul>
                    <li><a href="{{ url('/') }}">DesignArabia</a></li>
                    <li>Our Mission</li>
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
    <section id="ori-blog-feed" class="ori-blog-feed-section position-relative">
        <div class="container">
            <div class="ori-blog-feed-content">
                <div class="row" style="justify-content: center;">
                    @foreach( $missions as $mission)
                        <div class="col-lg-8">
                            <div class="ori-blog-feed-post-content">
                                <div class="ori-blog-feed-post-item-wrap">
                                    <div class="ori-blog-feed-item">
                                        <div class="ori-blog-img position-relative">
                                            <img src="{{ url('public/missions/' . $mission->image) }}" alt="">
                                            <div class="about-play-btn position-absolute">
{{--                                                <a class="text-uppercase video_box d-flex align-items-center justify-content-center"--}}
{{--                                                   href="https://www.youtube.com/watch?v=LAYSBeUjA2Q"><i--}}
{{--                                                            class="fas fa-play"></i></a>--}}
                                            </div>
                                        </div>
                                        <div class="ori-blog-text pera-content" style="text-align: justify; text-align: left;">
                                            <div class="blog-meta text-uppercase">
                                                <a class="blog-author" href="{{ url('/') }}"><i class="fas fa-user"></i>
                                                    DesignArabia</a>
{{--                                                <a class="blog-date" href="{{ $mission->created_at }}"><i class="fas fa-calendar-alt"></i> July 28,2022</a>--}}
                                            </div>
                                            <h3><a href="#">{{ $mission->title }}</a></h3>
                                            <p>{!! $mission->description !!}</p>
                                        </div>
                                    </div>
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