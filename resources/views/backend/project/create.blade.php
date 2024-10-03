@extends('backend.inc.master')
@section('title' , 'Project')
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
                        <li class="breadcrumb-item active" aria-current="page">Projects</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New Project</h5>
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
             <form action="{{ route('Project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
               <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-8">
                   <div class="border border-3 p-4 rounded">
                      <div class="mb-3">
                        <label for="inputProductDescription" class="form-label">Body</label>
                        <textarea class="form-control" name="body" id="teams" rows="3"></textarea>
                      </div>

                       <div class="row">

                           <div class="col-6">
                               <label for="inputProductDescription" class="form-label">Project Image</label>
                               <input id="image-uploadify" type="file" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                           </div>



                           <div class="col-6">
                               <label for="inputProductDescription" class="form-label">Video</label>
                               <div class="imageuploadify well">
                                   <div class="imageuploadify-overlay">
                                       <i class="fa fa-picture-o"></i>
                                   </div>
                                   <div class="imageuploadify-images-list text-center">
                                       <i class="bx bxs-cloud-upload"></i>
                                       <span class="imageuploadify-message"> Upload Your Video Here</span>
                                       <button type="button" class="btn btn-default" onclick="document.getElementById('getFile').click()">  Upload From Here<input onchange="readURL(this);" id="getFile" class="w-100" style="display: none"  type="file" name="video" ></button>
                                       <div id="imagepre" class="imageuploadify-details" style="opacity: 0;"><video id="blah" src="#" alt="Your Video"></video></div>
                                   </div>
                               </div>
                           </div>
                       </div>

                    </div>
                   </div>
                   <div class="col-lg-4">
                    <div class="border border-3 p-4 rounded">
                      <div class="row g-3">

                        <div class="col-md-12">
                            <label for="inputStarPoints" class="form-label">Project Name</label>
                            <input type="text" class="form-control" name="project_name" id="inputStarPoints" placeholder="project name">
                          </div>

                        <div class="col-md-12">
                            <label for="inputStarPoints" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="company_name" id="inputStarPoints" placeholder="company name">
                          </div>

                          <div class="col-12">
                            <label for="inputProductTags" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" id="inputProductTags" placeholder="date">
                          </div>



                      </div>
                  </div>
                  </div>
               </div><!--end row-->

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
@endsection

