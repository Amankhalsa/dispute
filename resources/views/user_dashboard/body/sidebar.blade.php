<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Disput Erasor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">   {{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('frontend.user.dashboard')}}" class="nav-link   @yield('userdashboard_select') ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home </p></a></li>
          <li class="nav-item">
            <a href="{{route('frontend.credit_report')}}" class="nav-link  @yield('credit_select')">
              <i class="nav-icon fas fa-file"></i>
              <p>Credit Report</p></a></li>
              <li class="nav-item">
            <a href="{{route('frontend.disputes')}}" class="nav-link  @yield('disputes')">
              <i class="nav-icon fas fa-user"></i>
              <p>Disputes</p></a></li>
              <li class="nav-item    @yield('disputes') ">
            <a href="{{route('frontend.letter.library')}}" class="nav-link   @yield('letter_library') ">
              <i class="nav-icon fas fa-copy"></i>
              <p>Letter Library</p></a></li>
              <li class="nav-item">
            <a href="{{route('frontend.video.tutorials')}}" class="nav-link  @yield('video_tutorials')  ">
              <i class="nav-icon fas fa-video"></i>
              <p>Video Tutorials</p></a></li>
        </ul>
      </nav> 



      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>