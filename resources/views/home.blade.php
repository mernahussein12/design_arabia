@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<div class="breatcam-section style-two d-flex align-items-center" style="background: url('public/frontend/assets/images/resource/contact.jpg')">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12">
                <div class="breatcam-content">
                    <h1> Service Details </h1>
                    <ul>
                        <li><a class="background" href="index.html"> <i class="fas fa-home"></i> Home </a></li>
                        <li><a href="service.html"> Services </a></li>
                        <li> Commercial Repairing </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 pr-0 pl-0 responsive">

                <div class="widget-sidebar-box">
                    <h4 class="sidebar-title"> Services</h4>
                    <ul class="sidebar-menu">

                  @foreach($cat_services as $serv)

          <li><a  href="{{ route('Services', $serv->id) }}"><i class="bi bi-check-lg"></i>{{$serv->name_en}}</a></li>
         @endforeach
                    </ul>
                </div>

                <!-- categoreis thumb -->

            </div>

            <div class="col-lg-9 col-md-12">
                <div class="service-dtls-all-items">
                    <div class="service-thumb2">
                          <img src="{{ url('public/services/' . $servicee->image) }}">
                    </div>
                    <div class="service-dtls-content">
                        <h2 class="service-title">{{ $servicee->name_en}}</h2>
                        <p class="service-dtls-desc">
                                {!! $servicee->text_en !!}
                            </p>
                    </div>


                </div>
                </div>
            </div>
        </div>
    </div>



