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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Library</h3>
                        <div class="text-right">
                            <a class="btn btn-primary"
                                href="{{route('backend.create.library')}}">Create Library</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
           
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Library Name: activate to sort column descending">
                                                    Library Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Library Letters: activate to sort column ascending">
                                                    Library Letters</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Status: activate to sort column ascending">
                                                    Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Action: activate to sort column ascending">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">Library</td>
                                                <td>&lt;p&gt;Library&lt;/p&gt;</td>
                                                <td>
                                                    <a href=""
                                                        class="btn btn-success">Active</a>
                                                </td>
                                                <td><a href=""
                                                        class="btn btn-info"><i
                                                            class="fas fa-eye">&nbsp;</i>View</a>&nbsp;<a
                                                        href=""
                                                        class="btn btn-info"><i
                                                            class="fas fa-edit">&nbsp;</i>Edit</a>&nbsp;<a
                                                        href=""
                                                        class="btn btn-danger"><i
                                                            class="fas fa-times">&nbsp;</i>Delete</a></td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">Library</td>
                                                <td>&lt;p&gt;Library&lt;/p&gt;</td>
                                                <td>
                                                    <a href=""
                                                        class="btn btn-success">Active</a>
                                                </td>
                                                <td><a href=""
                                                        class="btn btn-info"><i
                                                            class="fas fa-eye">&nbsp;</i>View</a>&nbsp;<a
                                                        href=""
                                                        class="btn btn-info"><i
                                                            class="fas fa-edit">&nbsp;</i>Edit</a>&nbsp;<a
                                                        href=""
                                                        class="btn btn-danger"><i
                                                            class="fas fa-times">&nbsp;</i>Delete</a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">Library Name</th>
                                                <th rowspan="1" colspan="1">Library Letters</th>
                                                <th rowspan="1" colspan="1">Status</th>
                                                <th rowspan="1" colspan="1">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                  
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
