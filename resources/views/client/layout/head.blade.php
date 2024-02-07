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

    <link rel="shortcut icon" type="image/x-icon" href={{asset('images/favicon.svg')}} />

    {{-- Font Awesome --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template CSS -->

    <link rel="stylesheet" href={{asset('css/animate.min.css')}} />

    <link rel="stylesheet" href={{asset('css/main.css')}} />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Vendor JS-->


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src={{asset('js/modernizr-3.6.0.min.js')}}></script>

    <script src={{asset('js/jquery-3.6.0.min.js')}}></script>

    <script src={{asset('js/jquery-migrate-3.3.0.min.js')}}></script>

    <script src={{asset('js/bootstrap.bundle.min.js')}}></script>

    <script src={{asset('js/waypoints.js')}}></script>

    <script src={{asset('js/wow.js')}}></script>

    <script src={{asset('js/magnific-popup.js')}}></script>

    <script src={{asset('js/perfect-scrollbar.min.js')}}></script>

    <script src={{asset('js/select2.min.js')}}></script>

    <script src={{asset('js/isotope.js')}}></script>

    <script src={{asset('js/scrollup.js')}}></script>

    <script src={{asset('js/swiper-bundle.min.js')}}></script>

    <script src={{asset('js/imageuploadify.min.js')}}></script>


    <script src={{asset('js/noUISlider.js')}}></script>

    <script src={{asset('js/slider.js')}}></script>
   

    <!-- Template  JS -->

    <script src={{asset('js/main.js')}}></script>

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>

<body>

 <!-- Preloader Start -->

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
                        <a href="{{url('/client_dashboard')}}" class="d-flex"><img alt="jobhub" src="{{asset('images/jobhub-logo.svg')}}" /></a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">                                
                                <li><a href="{{url('/client/my_profile')}}"><img src="{{asset('images/profiletop.png')}}" alt="" class="ngiconleft"> My Profile</a></li>
                                <li><a href="{{url('/client/my_team')}}"><img src="{{asset('images/myresources.png')}}" alt="" class="ngiconleft"> My Team</a></li>
                                <li><a href="{{url('/client/billings')}}"><img src="{{asset('images/billing.png')}}" alt="" class="ngiconleft"> Billings</a></li>
                                <li><a href="{{url('/client/postjob')}}" class="btn btn-default" style="color: #fff;">Post Job</a></li>                                                        
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header-right">
                    <div class="header-right">
                    <?php if($photo != ''){  ?>
                        <img src="{{url('/profile/'.$photo)}}" alt="jobhub" class="ngprofilepic">
                    <?php } else{ ?>               
                        <img src="{{asset('images/marc.png')}}" alt="jobhub" class="ngprofilepic">
                    <?php } ?>
                        <div class="header-nav w-147">
                            <nav class="nav-main-menu d-none d-xl-block">
                                <ul class="main-menu">
                                    <li class="has-children">
                                       <a class="active">{{Auth::user()->first_name}}</a>
                                            <ul class="sub-menu">
                                                <li class="ngcontent">
                                                    <a href="{{url('/client/logout')}}">
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
        </div>
    </header>
    

<!--End header-->

@yield('client')

<!-- Footer -->
<footer class="footer mt-50">

    <div class="container">

        <div class="footer-bottom mt-50">

            <div class="row">

                <div class="col-md-6">

                    Copyright ©2022 <a href="#"><strong>Jobhub</strong></a>. All Rights Reserved

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

<script>   
    $(document).ready(function () {
                $('#primary_skills').on('change', function () {
                    var primary_skills = $('#primary_skills').val();
                    $('#skills').html('');           
                    $.ajax({
                        type:'POST',
                        url:"{{ route('get-skills-job') }}", 
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
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
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

<script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#interview').attr('min',today);
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

<script>
    $("#open").click(function(){
     $("#a").css("display","block");
     $("#b").css("display","block");
    });


    $(".cancel").click(function(){
        $("#a").fadeOut();
        $("#b").fadeOut();
    });
</script>

<script>
    $(function() {
    
            $.validator.addMethod("regx", function(value, element, regexpr) {          
            return regexpr.test(value);
        }, "Please enter a valid URL.");

            $("#date_form").validate({


        ignore: [],
        ignore: '.hiddenclass',
                rules: {
                    interview: {
                        required: true,
                    },
                    interview_link: {
                        required: true,
                    },                                    
                },

                messages: {
                    interview: {
                        required: "Please choose date for interview.",
                    },
                    interview_link: {
                        required: "Please enter interview link.",
                    },                          

                },
                submitHandler: function(form) {
                
                    form.submit();
                }
            });
    });
</script>

<script>
    $(function() {
    
            $.validator.addMethod("regx", function(value, element, regexpr) {          
            return regexpr.test(value);
        }, "Please enter a valid URL.");

            $("#hire_form").validate({


        ignore: [],
        ignore: '.hiddenclass',
                rules: {
                    hire_from: {
                        required: true,
                    },
                    hire_till: {
                        required: true,
                    },                                    
                },

                messages: {
                    hire_from: {
                        required: "Please upload profile image.",
                    },
                    hire_till: {
                        required: "First name is required.",
                    },                          

                },
                submitHandler: function(form) {
                
                    form.submit();
                }
            });
    });
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