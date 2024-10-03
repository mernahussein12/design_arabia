@extends('frontend.inc.master')
@section('title', ' Blogs')
@section('content')

    <!-- Start of Breadcrumbs  section
	============================================= -->
    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background=assets/img/bg/bread-bg.png>
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>News & Blog</h1>
                <ul>
                    <li><a href="{{ url('/') }}">DesignArabia</a></li>
                    <li>News & Blog</li>
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

    <!-- Start of Blog Feed section
        ============================================= -->
    <section id="ori-blog-feed" class="ori-blog-feed-section position-relative">
        <div class="container">
            <div class="ori-blog-feed-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="ori-blog-feed-post-content">
                            <div class="ori-blog-feed-post-item-wrap">
                                <div class="ori-blog-feed-item">
                                    <div class="ori-blog-img">
                                        <img src={{ url('public/blogs/' . $blog->image) }} alt="" alt="" >
                                    </div>
                                    <div class="ori-blog-text pera-content" style="text-align: justify; text-align: left;">
{{--                                        <div  class="blog-meta text-uppercase">--}}
{{--                                            <a class="blog-cate" href=""><i class="fas fa-file"></i> business</a>--}}
{{--                                            <a class="blog-author" href=""><i class="fas fa-user"></i> orixy</a>--}}
{{--                                            <a class="blog-date" href=""><i class="fas fa-calendar-alt"></i> July 28,2022</a>--}}
{{--                                            <a class="blog-comment" href="#"><i class="fas fa-comment"></i> 05</a>--}}
{{--                                        </div>--}}
                                        <h3><a href="">{{ $blog->name }}</a></h3>
                                        <h4><a href="">{{ $blog->title }}</a></h4>
                                        <p>{!! $blog->body!!} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ori-blog-sidebar">
                            <div class="ori-blog-widget">
                                <div class="recent-post-widget">
                                    <h3 class="widget-title">Related Posts</h3>
                                    @foreach($blogs as $blog)
                                        <div class="ori-recent-post-item d-flex align-items-center">
                                            <div class="recent-blog-img">
                                                <img src="{{ url('public/blogs/' . $blog->image) }}" style="
                                                 height: 80px; width: 110px;">
                                            </div>
                                            <div class="recent-blog-text" style="text-align: justify; text-align: left;">
{{--                                                <span class="date-meta text-uppercase">{{ $blog->created_at }} </span>--}}
                                                <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->name }} </a></h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
{{--                            <div class="ori-blog-widget">--}}
{{--                                <div class="service-widget ul-li-block">--}}
{{--                                    <h3 class="widget-title">Services</h3>--}}
{{--                                    <ul>--}}
{{--                                        @foreach($services as $service)--}}
{{--                                            <li><a href="{{ route('Services', $service->id) }}">{{ $service->name_en }}</a></li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="ori-blog-widget">--}}
{{--                                <div class="gallery-widget ul-li">--}}
{{--                                    <h3 class="widget-title">Gallery</h3>--}}
{{--                                    <ul class="zoom-gallery">--}}
{{--                                        <li><a href={{ url('public/front/assets/img/blog/blg-f5.png')}} data-source={{ url('public/front/assets/img/blog/blg-f5.png')}}><img src={{ url('public/front/assets/img/gallery/gl1.png')}} alt=""></a></li>--}}
{{--                                        <li><a href={{ url('public/front/assets/img/blog/blg-f5.png')}} data-source={{ url('public/front/assets/img/blog/blg-f5.png')}}><img src={{ url('public/front/assets/img/gallery/gl2.png')}} alt=""></a></li>--}}
{{--                                        <li><a href={{ url('public/front/assets/img/blog/blg-f5.png')}} data-source={{ url('public/front/assets/img/blog/blg-f5.png')}}><img src={{ url('public/front/assets/img/gallery/gl3.png')}} alt=""></a></li>--}}
{{--                                        <li><a href={{ url('public/front/assets/img/blog/blg-f5.png')}} data-source={{ url('public/front/assets/img/blog/blg-f5.png')}}><img src={{ url('public/front/assets/img/gallery/gl4.png')}} alt=""></a></li>--}}
{{--                                        <li><a href={{ url('public/front/assets/img/blog/blg-f5.png')}} data-source={{ url('public/front/assets/img/blog/blg-f5.png')}}><img src={{ url('public/front/assets/img/gallery/gl5.png')}} alt=""></a></li>--}}
{{--                                        <li><a href={{ url('public/front/assets/img/blog/blg-f5.png')}} data-source={{ url('public/front/assets/img/blog/blg-f5.png')}}><img src={{ url('public/front/assets/img/gallery/gl6.png')}} alt=""></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
    <!-- End of Blog Feed section
        ============================================= -->





@endsection
