@extends('user_dashboard.user_master')
@section('title','Letter Library')
@section('letter_library','active')
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

<div class="container-fluid">
    <div class="row">
    <div class="card  " style="margin-right: 25%; margin-left: 25%;">
    <img src="https://disputebee.com/img/work.png" class="img-fluid " style="height: 80px; width: 100px; margin-left: 40%">
    <p class="text-center p-2">If you have not created an IdentityIQ account yet,<a href="">CLICK HERE</a> .</p>
    <form class="row g-3 p-5" style="font-size: .8rem">
<div class="col-md-12">
  <label for="inputEmail4" class="form-label">Username</label>
  <input type="text" class="form-control" id="inputEmail4">
</div>
<div class="col-md-12">
  <label for="inputPassword4" class="form-label">Password</label>
  <input type="password" class="form-control" id="inputPassword4">
</div>
<div class="col-md-12">
  <label for="inputPassword4" class="form-label">Last four SSN</label>
  <input type="int" class="form-control" id="inputPassword4">
</div>
 <button class="btn btn-primary col-sm-12  mt-3 " type="submit">Button</button>
</form>


<p class="p-2">Still not working? <a href="">Send us a message</a> and we can help.</p>
    </div>
        </div>
</div>
@endsection