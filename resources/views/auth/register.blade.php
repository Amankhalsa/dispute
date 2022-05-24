
@extends('frontend.home_master')
@section('title')
Register
@stop
@section('description', 'Dispute Eraser')
@section('keywords', 'Dispute Eraser')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

<section class="banner banner-inner" id="home">
    <h1 class="text-capitalize text-white">Register</h1>
    </section>
    <div class="container ">
        <div class="row">
          <div class="col" style="background-color: #ffff;padding-top: 50px;">
            <div>
              <img src="{{asset('frontend/assets/images/work-01.jpg')}}" class="img-fluid">
            </div>
            
          </div>
           <div class="col card mt-5 mb-5" style="background-color: rgb(204, 255, 255,0.3);border:none;">
            <h1 class="text-center mt-5">Register</h1>
          <form class="row g-3 " style="padding-top: 5px;" method="POST" action="{{route('register')}}">
       @csrf
             <div class="col-md-6">
          <label for="inputfirstname" class="form-label">First Name</label>
          <input id="name" type="text" class="form-control " name="firstname" value="" required="" autocomplete="firstname" autofocus="">
        </div>
        <div class="col-md-6">
          <label for="Lastname" class="form-label">Last Name</label>
          <input id="name" type="text" class="form-control " name="lastname" value="" required="" autocomplete="lastname" autofocus="">
            </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label pt-2">Email</label>
          <input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email" autofocus="">
            </div>
        <div class="col-md-6">
          <label for="inputmobile" class="form-label pt-2">Mobile</label>
          <input id="name" type="text" class="form-control " name="mobile" value="" required="" autocomplete="mobile" autofocus="">
            </div>
         <div class="col-md-12">
          <label for="inputPassword4" class="form-label pt-2">Password</label>
          <input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password">
            </div>
         <div style="margin-left: 40%;padding-bottom: 10px;">
        <div class="row mb-0 mt-3">
      <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-primary">
      Register
      </button>
      </div>
      </div>
          </div>  
          </form>
          </div>
        </div>
      </div>
@endsection     
