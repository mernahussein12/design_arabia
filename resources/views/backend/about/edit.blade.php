@extends('backend.inc.master')
@section('title' , 'Edit About  ')
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
                        <li class="breadcrumb-item active" aria-current="page">About </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New About</h5>
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
          <form action="{{ route('About.update', $about->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
               <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-12">
                   <div class="border border-3 p-4 rounded">
                    <div class="mb-3">
                        <label for="inputProductTitle"  class="form-label">Mission Title</label>
                        <input type="text" class="form-control" value="{{ $about->title }}" name="title" id="inputProductTitle" placeholder="about name">
                      </div>
                    <div class="mb-3">
                        <label for="inputProductDescription" class="form-label"> Body</label>
                         <textarea class="form-control" name="body" id="sliders" rows="3">{{ $about->body }}</textarea>
                        </div>
                   </div>


                  <div class="mb-3">
                    <label for="inputProductDescription" class="form-label">Images</label>
                    <input id="image-uploadify" type="file" value="{{$about->image}}" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                    <img src="{{url('public/abouts/' . $about->image) }}" width="50" height="50" alt="">
                  </div>
                    </div>
                   </div>

               </div><!--end row-->


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



@endsection
@section('scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);

                $('#imagepre')
                    .attr('style', e.target.result)
                    .opacity(1)
            };


            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
