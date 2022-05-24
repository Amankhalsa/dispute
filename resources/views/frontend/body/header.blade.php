<header class="custom-header fixed-top">
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid">
        <a class="navbar-brand d-block" href="index.html"><img src="{{asset('frontend/assets/images/logo.png')}}"></a>
        <a href="index.html" class="black-logo"><img src="{{asset('frontend/assets/images/black-logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('front.home_page')}}">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.home_page')}}#how-works">how it Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.home_page')}}#trial">Free Trial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.home_page')}}#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.about_us')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.contact_us')}}">Contact</a>
            </li>
          </ul>
          <div class="text-right nav-btn text-sm-left">
                                                  <a href="{{route('login')}}" class="btn">Log In</a>
                                              <a href="{{route('register')}}" class="btn">Sign In</a> 
                                                                  </div>
        </div>
      </div>
    </nav>
  </header>    