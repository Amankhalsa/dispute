@extends('backend.admin_master')
@section('title','User library')
@section('admin_library','active')
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
                    <li class="breadcrumb-item active">@yield('title') </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Library</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="#" method="post" id="quickForm">
                    <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Library Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name" class="form-control ">
                                      </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Library Letters</label>
                  <div class="col-sm-10">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="card card-outline card-info">
                        
                            <!-- /.card-header -->
                            <div class="card-body">
                              <textarea id="summernote">
                                Place <em>some</em> <u>text</u> <strong>here</strong>
                              </textarea>
                            </div>
                          
                            
                          </div>
                        </div>
                        <!-- /.col-->
                      </div>


                                      </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


@endsection
