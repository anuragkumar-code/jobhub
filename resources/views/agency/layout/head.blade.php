<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
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
    <link rel="stylesheet" href="{{asset('css/contents.css')}}">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  
</head>
<body>
 <!-- Preloader Start -->
 <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <img src="{{asset('images/loading.gif')}}" alt="jobhub" />
            </div>
        </div>
    </div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <p class="d-flex"><a href="{{ asset('/agency/projects') }}"><img alt="jobhub" src="{{asset('images/jobhub-logo.svg')}}" /></a></p>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-xl-block">
                        <ul class="main-menu">                          
                            
                            <li><a href="{{url('/agency/projects')}}"><img src="{{asset('images/project.png')}}" alt="" class="ngiconleft"> Projects</a></li>
                            <li><a href="{{url('/agency/resources')}}"><img src="{{asset('images/myresources.png')}}" alt="" class="ngiconleft"> My Resources</a></li>
                            <li><a href="{{url('/agency/billings')}}"><img src="{{asset('images/billing.png')}}" alt="" class="ngiconleft"> Billings</a></li>
                            <li><a href="{{url('/agency/my_profile')}}"><img src="{{asset('images/profiletop.png')}}" alt="" class="ngiconleft"> My Profile</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header-right rightpad">
                <?php if($photo != ''){  ?>
                <img src="{{url('/profile/'.$photo)}}" alt="jobhub" class="ngprofilepic">
                <?php } else{ ?>               
                  <img src="{{asset('images/marc.png')}}" alt="jobhub" class="ngprofilepic">
                  <?php } ?>
                    <div class="header-nav w-147">
                        <nav class="nav-main-menu d-xl-block">
                            <ul class="main-menu">
                                <li class="has-children uselist">
                                   <a class="active" href="#">{{Auth::user()->first_name}}</a>
                                        <ul class="sub-menu">
                                            <li class="ngcontent">
                                                <a href="{{url('/agency/logout')}}">
                                                    <img src="{{asset('images/logout.png')}}" alt="loginasclient">
                                                    <span class="mtl">Logout</span>
                                                </a>
                                            </li>   
                                      </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
        </div>

        
    </div>
    <div class="mobilemenu">   
            <div class="header-logo mobilelogo">
                <p><a href="http://toilers.co/beta/public/agency/projects"><img alt="jobhub" src="http://toilers.co/beta/public/images/jobhub-logo.svg"></a></p>
            </div>

            <div class="header-right mobileprofile">               
                  <img src="{{asset('images/marc.png')}}" alt="jobhub" class="ngprofilepic">
                    <div class="header-nav w-147">
                        <nav class="nav-main-menu d-xl-block">
                            <ul class="main-menu">
                                <li class="has-children uselist">
                                   <a class="active" href="#">{{Auth::user()->first_name}}</a>
                                        <ul class="sub-menu">
                                            <li class="ngcontent">
                                                <a href="{{url('/agency/logout')}}">
                                                    <img src="{{asset('images/logout.png')}}" alt="loginasclient">
                                                    <span class="mtl">Logout</span>
                                                </a>
                                            </li>   
                                      </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
        </div>

            <div class="topnav" id="myTopnav">                            
                <a href="{{url('/agency/projects')}}"><img src="{{asset('images/project.png')}}" alt="" class="ngiconleft"> Projects</a>
                <a href="{{url('/agency/resources')}}"><img src="{{asset('images/myresources.png')}}" alt="" class="ngiconleft"> My Resources</a>
                <a href="#"><img src="{{asset('images/billing.png')}}" alt="" class="ngiconleft"> Billings</a>
                <a href="{{url('/agency/my_profile')}}"><img src="{{asset('images/profiletop.png')}}" alt="" class="ngiconleft"> My Profile</a>
                <a href="javascript:void(0);" style="font-size:30px; color: #000;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </div>
</header>


<!--End header-->

    @yield('agency')
    
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-6">
                    Copyright © <?php echo date('Y'); ?> <a href="#"><strong>Jobhub</strong></a>. All Rights Reserved
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
  <!-- <script src="{{asset('js/select2.min.js')}}"></script> -->
    <script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>


    <script src="{{asset('js/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/waypoints.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <script src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/isotope.js')}}"></script>
    <script src="{{asset('js/scrollup.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/imageuploadify.min.js')}}"></script>
    <script src="{{asset('js/noUISlider.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    <!-- Template  JS -->
    <script src="{{asset('js/main.js')}}"></script>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        $("#datepicker").datepicker({
        
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true //to close picker once year is selected
        });


        $(document).ready(function() {
                    $('input[type="file"]').imageuploadify();
                })
    </script>

    <script>
        $(document).ready(function(){
            $('.check_skills').on('click', function(){

                //alert('hello'); 
                var services = [];  

                //alert(services); exit; 
                $('.check_skills').each(function(){  
                    if($(this).is(":checked"))  
                        {  
                        services.push($(this).val());  
                        }      
                    });  
                services = services.toString(); 
                    
                    

                $.ajax({
                type: 'POST',
                url: "{{route('get-technologies')}}",
                data: {"_token": "{{ csrf_token() }}",service_id:services},
                success:function(data){
                $('#response').html(data);

                }
                })             

                });
        });
    </script>

    <script>    
        $(document).ready(function () {
                    $('#primary_skills').on('change', function () {
                        var primary_skills = [];

                        var primary_skills = $("#primary_skills :selected").map((_, e) => e.value).get();
                       
                        $('#skills').html('');           
                        $.ajax({
                            type:'POST',
                            url:"{{ route('get-skills') }}", 
                            data:{"_token": "{{ csrf_token() }}",primary_skills:primary_skills},
                            success:function(data)
                            {    
                                $('#skills').html(data)
                            }
                        });
                    });
                });
    </script>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
    function hide() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>




</body>
</html>