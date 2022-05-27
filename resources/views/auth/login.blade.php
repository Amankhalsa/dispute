@extends('frontend.home_master')
@section('title')
Login
@stop
@section('description', 'Dispute Eraser')
@section('keywords', 'Dispute Eraser')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

<main>
    <section class="banner banner-inner" id="home">
<h1 class="text-capitalize text-white">@yield('title')</h1>
</section>
<div class="container mt-5 mb-5">
<div class="row">
<div class="col" style="background-color: #e6e6e6">
<div>
<img src="{{asset('frontend/assets/images/work-02.jpg')}}" class="img-fluid">
</div>

</div>
<div class="col" style="background-color:#bfbfbf">

<form style="padding-top: 45px;padding-bottom: 100px" method="POST" action="{{ route('login') }}">
@csrf
  <div class="col-md-12">
<label for="inputEmail4" class="form-label pt-2">Email</label>
<input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email" autofocus="">
</div>
<div class="col-md-12">
<label for="inputPassword4" class="form-label pt-2">Password</label>
<input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password">
</div>
    <div class="row mb-0 mt-3">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
               Login
           </button>
      <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration:none;">
    Forgot Your Password?
     </a>
</div>
</div>
</form>
</div>
</div>
</div>
</main>
@endsection     