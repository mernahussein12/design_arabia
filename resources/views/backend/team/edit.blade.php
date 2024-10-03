@extends('backend.inc.master')
@section('title' , 'Edit Team  ')
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
                        <li class="breadcrumb-item active" aria-current="page">Team </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New Team</h5>
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
          <form action="{{ route('Team.update', $team->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-8">
                   <div class="border border-3 p-4 rounded">
                    <div class="mb-3">
                        <label for="inputProductTitle" class="form-label">Name</label>
                        <input type="text" name="name" value="{{$team->name}}" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                      </div>
                      <div class="mb-3">
                        <label for="inputProductDescription" class="form-label">Summary</label>
                        <textarea class="form-control" name="summary"  id="teams" rows="3">{{$team->summary}}</textarea>
                      </div>

                      <div class="mb-3">
                        <label for="inputProductDescription" class="form-label">Experience</label>
                        <textarea class="form-control" name="exp"  id="exp" rows="3">{{ $team->exp}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="inputProductDescription" class="form-label">Images</label>
                        <input id="image-uploadify" type="file" value="{{$team->image}}" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                        <img src="{{url('public/teams/' . $team->image) }}" width="50" height="50" alt="">
                      </div>
                    </div>
                   </div>

                   <div class="col-lg-4">
                    <div class="border border-3 p-4 rounded">
                      <div class="row g-3">

                        <div class="col-md-12">
                            <label for="inputStarPoints" class="form-label">Education</label>
                            <input type="text" class="form-control" value="{{$team->education}}" name="education" id="inputStarPoints" placeholder="education">
                          </div>

                        <div class="col-md-12">
                            <label for="inputStarPoints" class="form-label">Specialization</label>
                            <input type="text" class="form-control" value="{{$team->spec}}" name="spec" id="inputStarPoints" placeholder="spec">
                          </div>

                          <div class="col-12">
                            <label for="inputProductTags" class="form-label">Skill</label>
                            <input type="text" class="form-control" value="{{$team->skills}}" name="skills" id="inputProductTags" placeholder="skill">
                          </div>
                        <div class="col-md-12">
                            <label for="inputPrice" class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{$team->email}}" name="email" id="inputPrice" placeholder="email">
                          </div>
                          <div class="col-md-12">
                            <label for="inputCompareatprice" class="form-label">Address</label>
                            <input type="text" class="form-control" value="{{$team->address}}" name="address" id="inputCompareatprice" placeholder="address">
                          </div>
                          <div class="col-md-12">
                            <label for="inputCostPerPrice" class="form-label">Phone Number</label>
                            <input type="number" name="phone" value="{{$team->phone}}" class="form-control" id="inputCostPerPrice" placeholder="number">
                          </div>
                      </div>
                  </div>
                  </div>
               </div><!--end row-->

            </div>
               <!--end row-->


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
