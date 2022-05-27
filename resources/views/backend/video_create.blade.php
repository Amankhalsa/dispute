@extends('backend.admin_master')
@section('title','Create Video')
@section('admin_video_tutorials','active')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">@yield('title')</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">@yield('title')  </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Video</h3>
            </div>
            <form id="form_one" method="post" action="#" enctype="multipart/form-data">
         
                <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control required" id="name" placeholder="Enter Video Name">
                </div>

                <div class="form-group">
                  <label for="Duration">Duration</label>
                  <input type="text" name="duration" class="form-control required" id="duration" placeholder="Enter Video Duration">
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control required" id="description" name="description" placeholder="Enter Description"></textarea>
                </div>
               
                <div class="form-group">
                  <label for="profile">Select Video</label>
                  <input type="file" name="video" class="form-control required" id="video" onchange="previewFile(this);">
                </div>
              </div>
            
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
         
          </div>
      
      </div>

      
    
    </div>
  </section>
@endsection