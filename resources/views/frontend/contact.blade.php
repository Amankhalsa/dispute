
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
            <h1 class="text-white">Contact us</h1>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-page">
    <div class="container">
        <div class="row ">
        <div class="col ">
        <h2 class="mt-3">Get In Touch</h2>
         <div>
          <div class="d-flex flex-row bd-highlight mb-3">
          <div class="" id="hover" style=" ">
            <i class="fa fa-map-marker-alt"></i>
          </div>
          <div class="p-2 bd-highlight">1000 Hillcrest Rd Ste <br>340B Mobile, AL 36695</div>
         
        </div>
        <div class="d-flex flex-row bd-highlight mb-3">
          <div class="" id="hover" style=" ">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="p-2 bd-highlight">newcreditinc@newcreditinc.org</div>
         
        </div>
        <div class="d-flex flex-row bd-highlight mb-3" style="align-items: center;">
          <div class="" id="hover" style=" ">
            <i class="fa fa-phone-alt"></i>
          </div>
          <div class="p-2 bd-highlight">2514590621</div>
         
        </div>
           
        </div>
    
        </div>
        <div class="col">
        <form class="row g-3 fic" style="padding-top: 5%;" method="post" action="contactform">
        @csrf
        
        <div class="col-md-6">
        <label for="inputfirstname" class="form-label" style="font-size: .8rem">Your Name</label>
        <input type="text" class="form-control" name="name" id="inputEmail4" style=" border:1px solid #0d343e;">
         
       </div>
       <div class="col-md-6">
        <label for="Lastname" class="form-label" style="font-size: .8rem">Your Email</label>
        <input type="Email" class="form-control" name="email" id="inputemail" style=" border:1px solid #0d343e;">
        
       </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label pt-2" style="font-size: .8rem">Your Phone</label>
        <input type="int" class="form-control" name="mobile" id="inputyourname" style=" border:1px solid #0d343e;">
      
      </div>
      <div class="col-md-6">
        <label for="inputmobile" class="form-label pt-2" style="font-size: .8rem">Subject</label>
        <input type="text" class="form-control" name="subject" id="inputsubject" style=" border:1px solid #0d343e;">
        
      </div>
       <div class="col-md-12">
        <label for="inputmessage" class="form-label pt-2" style="font-size: .8rem">Message</label>
        <input type="text" class="form-control" name="message" id="inputmessage" style="height: 100px; border:1px solid #0d343e;">
            </div>
       <div style="margin-left: 40%;padding-bottom: 10px;">
       <button type="submit" class="btn  text-white text-uppercase mt-2 " style="background-color: rgb(69, 199, 235)">Submit</button> 
        </div>  
        </form>
        </div>
        </div> 
        </div>
  </section>
@endsection     
