@extends('layouts.head')
@section('content')

<!-- Content -->

<main class="main pt-0">

<div class="nghostc26">



 <div class="row mt-0">



    <div class="col-md-6 loginleft">

        <p class="mb-35 text-md-lh24 color-black-5"><a href="{{url('/')}}" class="d-flex"><img alt="jobhub" src="images/jobhub-logo.svg"></p></a>

        <h1>A Staff Augmentation for New<br>Age Agency Partners</h1>

        <h5>Generate Month on Month Revenue from the Comfort of your<br>Home with Jobhub</h5>

        <span><img alt="jobhub" src="images/login-signup-agency.svg"></span>

    </div>



    

    <div class="col-md-6 loginright">

        <div class="container">

            <div class="mw-450 text-center">

                <h4>New User? <a href="{{url('/agency_signup')}}">Sign up</a></h4>

                <h3 class="mb-30 wow animate__ animate__fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">

                    <span><a href="{{url('/')}}"><img alt="jobhub" src="images/arrow-left-solid.svg"></a></span>

                    <span class="titleicon"><img alt="jobhub" src="images/apartment.png"></span>

                    Log in as Agency Partner

                </h3>

            </div>

            @if(session()->has('success'))

                <div class="alert alert-info" role="alert">

                    <strong>{{session()->get('success')}}</strong> 

                </div>

            @endif 

            @if(session()->has('fail'))

                <div class="alert alert-danger" role="alert">

                    <strong>{{session()->get('fail')}}</strong> 

                </div>

            @endif

            @if(session()->has('error'))

                <div class="alert alert-danger" role="alert">

                    <strong>{{session()->get('error')}}</strong> 

                </div>

            @endif

            <div class="block-pricing" style="background: none ;">

                <div class="row align-items-center justify-content-center">

                   <div class="col-lg-12 col-md-12 wow animate__ animate__fadeInUp  animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                        <div class="box-pricing-item text-center">

                            <div>

                                <span class="for-month display-month" style="width: 100%;">

                                    <form class="contact-form-style" id="contact-form" action="{{route('agency_logedin')}}" method="post">

                                        @csrf

                                        <div class="row">

                                            

                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20">

                                                    <label>Email</label>

                                                    <input name="email" placeholder="Email *" type="Email *" value="{{old('email')}}">

                                                    <p class="text-danger">@error('email') {{$message}}@enderror</p>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20">

                                                    <label>Password</label>

                                                    <input name="password" placeholder="Password *" id="password-field" type="password">

                                                    <span toggle="#password-field" class="fa fa-sm fa-eye field-icon toggle-password"></span>

                                                    <p class="text-danger">@error('password') {{$message}}@enderror</p>

                                                </div>

                                            </div>



                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20" style="text-align: right;">

                                                    <a href="{{url('/agency_forgot_password')}}">Forgot Password?</a>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 text-center">

                                                <button class="submit submit-auto-width btn btn-default" type="submit">Login</button>


                                            </div>

                                        </div>

                                    </form>

                                </span>

                                <span class="for-year" style="width: 60%;">

                                    <form class="contact-form-style" id="contact-form" action="#" method="post">

                                        <div class="row">

                                            

                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20">

                                                    <input name="email" placeholder="Email *" type="Email *">

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20">

                                                    <input name="" placeholder="Password *" type="password">

                                                </div>

                                            </div>



                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20" style="text-align: right;">

                                                    <a href="#">Forgot Password?</a>

                                                </div>

                                            </div>

                                            

                                            <div class="col-lg-12 col-md-12 text-center">

                                                

                                                <button class="submit submit-auto-width btn btn-default" type="submit">Login</button>

                                            </div>

                                        </div>

                                    </form>

                                </span> 

                            </div>

                            <div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



 </div>



</div>
   
</main>

<!-- End Content -->


<style>
    .text-danger {
    color: red!important;
    font-size: 12px!important;
    font-weight: 700!important;
    text-align: left;
    }
    .field-icon {
    float: right!important;
    margin-right: 17px;
    margin-top: -24px;
    position: relative;
    z-index: 2;
    cursor:pointer;
    color: #6e6b7b;
    font-weight: 400;
    }

</style>


<script type="text/javascript">
    $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>

@endsection