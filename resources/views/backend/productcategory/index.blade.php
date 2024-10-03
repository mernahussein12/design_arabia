@extends('backend.inc.master')
@section('title' , ' All Product  Categoreis')
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
                        <li class="breadcrumb-item active" aria-current="page">Product categoreis</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <a class="btn btn-outline-primary btn-lg" href="{{ route('ProductCategory.create') }}">
            Add Product Category
         </a>

        <hr/>
        <h6 class="mb-0 text-uppercase"> All Data </h6>

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

                                <th>Name</th>
                                <th>Image</th>
                                <th>Video</th>
                                <th>Operations</th>

                            </tr>
                        </thead>
                        <tbody>
                        <tfoot>
                            <tr>
                                @foreach ($categoreis as $key => $category)


                                <td>{!! $category->name !!}</td>
                                
                                <td><img src="{{url('public/products/' . $category->image) }}" width="50" height="50" alt=""></td>
                                <td><video src="{{url('public/products/' . $category->video) }}" width="50" height="50" alt=""></video></td>
                                <td>
                                    <a href="{{ route('ProductCategory.edit', $category->id) }}" >
                                        <i class="bx bx-edit font-30"></i>
                                    </a>
                                    <button class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#exampleDangerModal{{ $category->id }}">
                                        <i style="color: red" class="bx bx-trash font-30 " ></i>
                                    </button>
                                </td>
                            </tr>
                             {{-- Start Modal --}}
                        <div class="modal fade" id="exampleDangerModal{{$category->id}}" tabindex="-1" aria-hidden="true">
                            <form action="{{ route('ProductCategory.destroy', $category->id) }}" method="POST">
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
                                        {{$category->name}}
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
                        {{-- End Modal --}}
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
