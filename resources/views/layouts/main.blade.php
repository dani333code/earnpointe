<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Earn Pointe</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="main/img/favicon.png" rel="icon">
  <link href="main/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="main/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="main/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="main/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="main/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="main/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="main/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="main/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Shuffle - v2.2.0
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  @include('basic.hero')<!-- End Hero -->

  <!-- ======= Header ======= -->
  @include('basic.header')


  <!-- End Header -->

  <main id="main">

  
            @yield('content')

    <!-- ======= About Us Section ======= -->
    @include('basic.about_us')
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    @include('basic.counts')
    <!-- End Counts Section -->

    <!-- ======= Our Services Section ======= -->
    @include('basic.our_services')
    <!-- End Our Services Section -->
    @foreach ($plans as $plan)

    @include('basic.pricing')
    
    @endforeach

    <!-- ======= Cta Section ======= -->
    @include('basic.cta')
    <!-- End Cta Section -->
    <br>
    <br>
    <div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

  

 



    <!-- ======= Our Team Section ======= -->
    @include('basic.our_team')
    <!-- End Our Team Section -->

    <!-- =======testimony Section ======= -->
    @include('basic.testimony')
    


    <!-- ======= Contact Us Section ======= -->
    @include('basic.contact_us')
    <!-- End Contact Us Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Earn Pointe</h3>
            <p>
                    <p>Email : admin@earnpointe.com</p>
            111 New Union St Coventry CV1 2NT, Union House <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> admin@earnpointe.com<br>
            </p>
            
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Earn Pointe</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="main/vendor/jquery/jquery.min.js"></script>
  <script src="main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="main/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="main/vendor/php-email-form/validate.js"></script>
  <script src="main/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="main/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="main/vendor/counterup/counterup.min.js"></script>
  <script src="main/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="main/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="main/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="main/js/main.js"></script>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="67f1d852-f387-495d-b0f5-f9349bb395bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>


</body>

</html>