@extends('backend.inc.master')
@section('title' , 'Edit Product Category')
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
                        <li class="breadcrumb-item active" aria-current="page">Product Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New Product Category</h5>
              <hr/>

              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('ProductCategory.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
               <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-12">
                   <div class="border border-3 p-4 rounded">
                    <div class="mb-3">
                        <label for="inputProductTitle" class="form-label">Category Title</label>
                        <input type="text" class="form-control" name="name" value="{{$category->name}}" id="inputProductTitle" placeholder="category name">
                      </div>

                      {{-- <div class="mb-3">
                        <label for="inputProductDescription" class="form-label">Images</label>
                        <input id="image-uploadify" type="file" value="{{$category->image}}" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                        <img src="{{asset('images/' . $category->image) }}" width="50" height="50" alt="">
                      </div> --}}


                      <div class="container mt-5">
                        <div class="row">
                            <!-- قسم تحميل الصورة -->
                            <div class="col-6">
                                <label for="fileUploader" class="form-label">Upload Image</label>
                                <div class="imageuploadify well">
                                    <div class="imageuploadify-images-list text-center">
                                        <button type="button" class="btn btn-default" onclick="document.getElementById('fileUploader').click()">
                                            Upload Image
                                            <input id="fileUploader" style="display: none" type="file" name="image" onchange="previewImage(this);">
                                        </button>
                                        <div id="imagePreview" style="display: none;">
                                            <img id="blahImage" src="{{url('public/gallaries/' . $category->image) }}" alt="Your Image" style="width: 100px; height: 100px; margin-top: 10px;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- قسم تحميل الفيديو -->
                            <div class="col-6">
                                <label for="inputProductDescription" class="form-label">Upload Video</label>
                                <div class="imageuploadify well">
                                    <div class="imageuploadify-images-list text-center">
                                        <button type="button" class="btn btn-default" onclick="document.getElementById('getFile').click()">
                                            Upload Video
                                            <input id="getFile" class="w-100" style="display: none" type="file" name="video" onchange="previewVideo(this);">
                                        </button>
                                        <div id="videoPreview" style="display: none;">
                                            <video id="blahVideo" src="{{url('public/gallaries/' . $category->video) }}" width="100" height="100" controls style="margin-top: 10px;"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                   </div>

               </div>
               <!--end row-->
            </div>

            <div class="form-actions right p-3  ">
                <button type="submit" class="btn btn-primary ">
                    <i class="fa fa-check-square-o"></i> Save
                </button>
                <button type="reset" class="btn btn-warning mr-1">
                    <i class="feather icon-x"></i> cancel
                </button>
            </div>
        </form>
          </div>
      </div>


    </div>
</div>


@endsection
<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('blahImage').src = e.target.result;
            document.getElementById('imagePreview').style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function previewVideo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('blahVideo').src = e.target.result;
            document.getElementById('videoPreview').style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

    </script>
@endsection
