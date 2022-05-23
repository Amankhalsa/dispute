
@extends('frontend.home_master')
@section('title')
 About
@stop
@section('description', 'Dispute Eraser')
@section('keywords', 'Dispute Eraser')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')

<section class="banner banner-inner" id="home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="banner-content text-center">
            <h1 class="text-white">About</h1>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-page">
    <div class="container">
      <div class="row">
      <div class="col-lg-6 about-page-content">
        <h4>About</h4>
        <p>Dispute Eraser is a credit repair software platform created in 2021. Our software is used by professional credit repair companies to streamline their operations, and can also be used by consumers for personal use.</p>
        <p> One of the most successful strategies in credit repair involves sending carefully crafted letters to credit bureaus, debt collectors, and creditors. It is commonly referred to as the "factual dispute" method.
        </p>
        <p>It has now evolved into a complete professional credit repair software solution - whether you're an individual repairing your own credit or a professional company repairing credit for your clients.</p>
        <!-- <ul>
          <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="javascript:void(0);"><i class="fa fa-youtube-play"></i></a></li>
        </ul> -->
      </div>
      <div class="col-lg-6 about-page-img">
        <img src="{{asset('frontend/assets/images/work-01.jpg')}}" class="ima-fluid w-100" alt="">
      </div>
      </div>
    </div>
  </section>
@endsection     
