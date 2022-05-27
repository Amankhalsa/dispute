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
    <h1 class="text-capitalize text-white">@yield('title')</h1>
    </section>
    <div class="container ">
        <div class="row">
          <div class="col" style="background-color: #ffff;padding-top: 50px;">
            <div>
              <img src="{{asset('frontend/assets/images/work-01.jpg')}}" class="img-fluid">
            </div>
            
          </div>
           <div class="col card mt-5 mb-5" style="background-color: rgb(204, 255, 255,0.3);border:none;">
            <h1 class="text-center mt-5">@yield('title')</h1>
    <form class="row g-3 " style="padding-top: 5px;" method="POST" action="{{ route('register') }}">
       @csrf
             <div class="col-md-6">
          <label for="inputfirstname" class="form-label">First Name</label>
          <input id="name" type="text" class="form-control " name="firstname"  required="" autofocus="">
          @error('firstname')
          <span class="text-danger"> {{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="Lastname" class="form-label">Last Name</label>
          <input id="name" type="text" class="form-control " name="lastname"  required=""  autofocus="">
          @error('lastname')
          <span class="text-danger"> {{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label pt-2">Email</label>
          <input id="email" type="email" class="form-control " name="email" required="" autofocus="">
          @error('email')
          <span class="text-danger"> {{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="inputmobile" class="form-label pt-2">Mobile</label>
          <input id="inputmobile" type="text" class="form-control" name="mobile"  required=""  autofocus="">
          @error('mobile')
          <span class="text-danger"> {{$message}}</span>
          @enderror
        </div>
         <div class="col-md-12">
          <label for="inputPassword4" class="form-label pt-2">Password</label>
          <input id="password" type="password" class="form-control" name="password" required="" >
          @error('password')
          <span class="text-danger"> {{$message}}</span>
          @enderror
        </div>
        {{-- confirm  --}}
        <div class="col-md-12">
          <label for="password_confirmation" class="form-label pt-2">Confirm Password</label>
          <input id="password_confirmation" type="password" class="form-control " name="password_confirmation" required=""  autocomplete="new-password">
          @error('password_confirmation')
          <span class="text-danger"> {{$message}}</span>
          @enderror
        </div>
        {{-- confirm  --}}
               
        
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