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
                <h4>Already have an account? <a href="{{url('/client_login')}}">Login</a></h4>
                <h3 class="mb-30 wow animate__ animate__fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
                    <span><a href="{{url('/')}}"><img alt="jobhub" src="images/arrow-left-solid.svg"></a></span>
                    <span class="titleicon"><img alt="jobhub" src="images/apartment.png"></span>
                    Signup as Client
                </h3>
            </div>

            <div class="block-pricing" style="background: none ;">

                <div class="row align-items-center justify-content-center">

                   <div class="col-lg-12 col-md-12 wow animate__ animate__fadeInUp  animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                        <div class="box-pricing-item text-center">

                            <div>

                                <span class="for-month display-month" style="width: 100%;">

                                    <form class="contact-form-style signupform" id="contact-form" action="{{route('client_registered')}}" method="post">

                                        @csrf

                                        <div class="row">

                                            

                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <label>First Name *</label>
                                                    <input name="first_name" placeholder="First Name" value="{{old('first_name')}}" type="Email *">
                                                    <p class="text-danger">@error('first_name') {{$message}}@enderror</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <label>Last Name (optional)</label>
                                                    <input name="last_name" placeholder="Last Name" value="{{old('last_name')}}" type="Email *">
                                                    <p class="text-danger">@error('last_name') {{$message}}@enderror</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-style mb-20">
                                                    <label>Email *</label>
                                                    <input name="email" placeholder="Client Email" value="{{old('email')}}" type="Email *">
                                                    <p class="text-danger">@error('email') {{$message}}@enderror</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-style mb-20">
                                                    <label for="">Company Name *</label>
                                                    <input name="company_name" value="{{old('company_name')}}" placeholder="Company Name" type="text">
                                                    <p class="text-danger">@error('company_name') {{$message}}@enderror</p>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-style mb-20">
                                                    <label for="">Company Website Link *</label>
                                                    <input name="company_website" value="{{old('company_website')}}" placeholder="Company Website Link" type="text">
                                                    <p class="text-danger">@error('company_website') {{$message}}@enderror</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-style mb-20">
                                                    <label>Contact Number *</label>
                                                    <input name="mobile" placeholder="Contact Number" value="{{old('mobile')}}" onkeypress="return isNumberKey(event)" type="Email *">
                                                    <p class="text-danger">@error('mobile') {{$message}}@enderror</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-style mb-20">
                                                    <label>Password *</label>
                                                    <input name="password" placeholder="Password" id="password-field" type="password">
                                                    <span toggle="#password-field" class="fa fa-sm fa-eye field-icon toggle-password"></span>
                                                    <p class="text-danger">@error('password') {{$message}}@enderror</p>
                                                    <div>
                                                        <p class="password-instruction">Use atleast 8 characters with a mix of uppercase & lowercase alphabets, numbers and symbols.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="input-style mb-20">
                                                    <label>Confirm Password *</label>
                                                    <input name="confirm_password" placeholder="Confirm Password" id="password-fields" type="password">
                                                    <span toggle="#password-fields" class="fa fa-sm fa-eye field-icon toggle-password"></span>
                                                    <p class="text-danger">@error('confirm_password') {{$message}}@enderror</p>                                              
                                                </div>
                                            </div>                                         

                                            <div class="col-lg-12 col-md-12 text-center">
                                                <button class="submit submit-auto-width btn btn-default" type="submit">Signup</button>
                                                <p>Creating an account implies that you accept to our <a href="#">Terms of Service,</a> 
                                                    <a href="#">Privacy Policy</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </span>
                                <span class="for-year" style="width: 60%;">

                                    <form class="contact-form-style" id="contact-form" action="#" method="post">

                                        <div class="row">

                                            

                                            <div class="col-lg-12 col-md-12">

                                                <div class="input-style mb-20">

                                                    <input name="" placeholder="Email *" type="Email *">

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

.password-instruction {
    font-size: 12px;
}
</style>





@endsection