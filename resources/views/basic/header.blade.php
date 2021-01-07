<header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Earn Pointe</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#plans">Plans</a></li>
          <li><a href="#team">Team</a></li>

          <li><a href="#contact">Contact Us</a></li>
          @auth

          <li><a href="{{ route('home') }}">Home </a></li>

          @else

          <li><a href="{{ route('login') }}">Login </a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          @endauth

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>