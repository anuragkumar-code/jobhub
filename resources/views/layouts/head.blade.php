<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta chart="utf-8" />
<title>Welcome</title>
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:title" content="" />
<meta property="og:type" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.svg')}}" />
{{-- Font Awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('css/animate.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/main.css')}}" /> 

</head>

<body>
 
  <!-- Preloader Start -->

  <div id="preloader-active">

    <div class="preloader d-flex align-items-center justify-content-center">

        <div class="preloader-inner position-relative">

            <div class="text-center">

                <img src="images/loading.gif" alt="jobhub" />

            </div>

        </div>

    </div>

</div>


  @yield('content')


<!-- Footer -->

<footer class="footer mt-50">

  <div class="container">

      <div class="row">

          <div class="col-md-4 col-sm-12">

              <a href="index.html"><img alt="jobhub" src="images/jobhub-logo.svg" /></a>

              <div class="mt-20 mb-20">Jobhub is the heart of the design community and the best resource to discover and connect with designers and jobs worldwide.</div>

          </div>

          <div class="col-md-2 col-xs-6">

              <h6>Company</h6>

              <ul class="menu-footer mt-40">

                  <li><a href="#">About us</a></li>

                  <li><a href="#">Our Team</a></li>

                  <li><a href="#">Products</a></li>

                  <li><a href="#">Contact</a></li>

              </ul>

          </div>

          <div class="col-md-2 col-xs-6">

              <h6>Product</h6>

              <ul class="menu-footer mt-40">

                  <li><a href="#">Feature</a></li>

                  <li><a href="#">Pricing</a></li>

                  <li><a href="#">Credit</a></li>

                  <li><a href="#">FAQ</a></li>

              </ul>

          </div>

          <div class="col-md-2 col-xs-6">

              <h6>Download</h6>

              <ul class="menu-footer mt-40">

                  <li><a href="#">iOS</a></li>

                  <li><a href="#">Android</a></li>

                  <li><a href="#">Microsoft</a></li>

                  <li><a href="#">Desktop</a></li>

              </ul>

          </div>

          <div class="col-md-2 col-xs-6">

              <h6>Support</h6>

              <ul class="menu-footer mt-40">

                  <li><a href="#">Privacy</a></li>

                  <li><a href="#">Help</a></li>

                  <li><a href="#">Terms</a></li>

                  <li><a href="#">FAQ</a></li>

              </ul>

          </div>

      </div>

      <div class="footer-bottom mt-50">

          <div class="row">

              <div class="col-md-6">

                  Copyright ©2021 <a href="#"><strong>Jobhub</strong></a>. All Rights Reserved

              </div>

              <div class="col-md-6 text-md-end text-start">

                  <div class="footer-social">

                      <a href="#" class="icon-socials icon-facebook"></a>

                      <a href="#" class="icon-socials icon-twitter"></a>

                      <a href="#" class="icon-socials icon-instagram"></a>

                      <a href="#" class="icon-socials icon-linkedin"></a>

                  </div>

              </div>

          </div>

      </div>

  </div>

</footer>

<!-- End Footer -->

<!-- Vendor JS-->
<script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/waypoints.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/magnific-popup.js')}}"></script>
<script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/scrollup.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/noUISlider.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<!-- Template  JS -->
<script src="{{asset('js/main.js')}}"></script>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
    tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>

<script type="text/javascript">
    $('.toggle-password').click(function() {
    $(this).toggleClass('fa-eye fa-eye-slash');
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>

<script type="text/javascript">
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>

</body>
</html>