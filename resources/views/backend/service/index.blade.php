@extends('backend.inc.master')
@section('title' , ' All Service ')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Service </li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <a class="btn btn-outline-primary btn-lg" href="{{ route('Service.create') }}">
            Add Service
         </a>
         <hr/>

         <h6 class="mb-0 text-uppercase"> All Data </h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                 <th>Title</th>
{{--                                <th>Body</th>--}}
                                <th>Category service</th>
                                <th>Image</th>
{{--                                <th>Images</th>--}}
                                <th>Operations</th>

                            </tr>
                        </thead>
                        <tbody>
                        <tfoot>
                            <tr>
                                @foreach ($services as $key => $service)

                                <td>{!! $service->name_en !!}</td>
{{--                                <td>{!! $service->body !!}</td>--}}
                                <td>{{ $service->category->name_en }}</td>

                                <td><img src="{{url('public/services/' . $service->image) }}" width="50" height="50" alt=""></td>
{{--                                    @foreach ($service->images as $image)--}}
{{--                                        <td>   <img src="{{ url('public/imags/' . $image->name) }}" width="50" height="50" alt="Additional Image"></td>--}}
{{--                                    @endforeach--}}
                                    <td>
                                    <a href="{{ route('Service.edit', $service->id) }}" >
                                        <i class="bx bx-edit font-30"></i>
                                    </a>
                                    <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $service->id }}">
                                        <i style="color: red" class="bx bx-trash font-30 " ></i>
                                    </button>
                                </td>
                            </tr>
{{--                              Start Modal --}}
                        <div class="modal fade" id="exampleDangerModal{{$service->id}}" tabindex="-1" aria-hidden="true">
                            <form action="{{ route('Service.destroy', $service->id) }}" method="POST">
                                @csrf
                                @method('delete')
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-white"> Confirm delete !</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-white">
                                        <p>
                                             Are you sure to delete :
                                        {{$service->name_en}}
                                        ?
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">cancell</button>
                                        <button type="submit" class="btn btn-dark"> Delete</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
{{--                         End Modal --}}
                        </tfoot>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
