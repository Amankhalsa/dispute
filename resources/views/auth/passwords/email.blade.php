@extends('frontend.home_master')
@section('title')
Forgot your password
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
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<form style="padding-top: 45px;padding-bottom: 100px" method="POST" action="{{ route('password.email') }}">
@csrf



  <div class="col-md-12">
<label for="inputEmail4" class="form-label pt-2">Email</label>
<input  id="email"  type="email" name="email" class="form-control "  value="" required="" autocomplete="email" autofocus="">
</div>

    <div class="row mb-0 mt-3">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Email Password Reset Link
           </button>

</div>
</div>
</form>
</div>
</div>
</div>
</main>
@endsection     