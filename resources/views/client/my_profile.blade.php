@extends('client.layout.head')
@section('client')
 <!-- Content -->
    <main class="main panelbg">       
        <section class="section-box mt-80">
            <div class="container">

                @if(session()->has('success'))
                <div class="alert alert-info" role="alert">
                    <strong>{{session()->get('success')}}</strong>
                </div>
                @endif

                <div class="row flex-row-reverse">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">                              
                        <form class="contact-form-style mt-30" id="contact-form" enctype='multipart/form-data' action="{{route('clients.profileimg')}}" method="post">
                            @csrf
                              <div class="adddeveloper-card">
                                      <h3 class="mb-20 mt-20">Client Profile</h3>
                                  <div class="row mt-30">
                                      <div class="col-lg-2 col-md-4 col-sm-12 col-12">
                                          <div class="developerimg">
                                              <?php
                                              if($get_client_details->company_logo == ''){ ?>
                                                  <img src="{{asset('images/ava_1.png')}}" alt="">
                                                    <?php }else{ ?>
                                                  <img src="{{url('/profile/'.$get_client_details->company_logo)}}" alt="">
                                                <?php }
                                              ?>                                             
                                          </div>
                                      </div>
                                      <div class="col-lg-10 col-md-8 col-sm-12 col-12">
                                          <div class="uploadimg">
                                              <label for="">Choose Profile Image</label>
                                              <input name="avatar" accept="image/*" type="file"/>                                
                                          </div>
                                          <p class="text-danger">@error('avatar') {{$message}}@enderror</p>
                                          <input type="hidden" name="profile_image" value="">
                                          <input type="submit" class="custom-file-upload" value="Upload"> 
                                      </div>
                                  </div> 
                              </div>
                          </form>

                        <form class="contact-form-style mt-30" id="contact-form" enctype='multipart/form-data' action="{{url('/client/addprofile')}}" method="post">
                            @csrf
                            <div class="adddeveloper-card loginright">
                                <div class="row wow animate__ animate__fadeInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">First Name *</label>
                                            <input name="first_name" value="{{Auth::user()->first_name}}" placeholder="Enter first name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Last Name *</label>
                                            <input name="last_name" value="{{Auth::user()->last_name}}" placeholder="Enter last name" type="text">                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Company Name *</label>
                                            <input name="company_name" value="{{$get_client_details->company_name}}" placeholder="About Company" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Founded Year</label>
                                            <input name="establishment_year" value="{{$get_client_details->establishment_year}}" id="datepicker" placeholder="Enter Founded Year" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Company Email *</label>
                                            <input name="email" value="{{Auth::user()->email}}" placeholder="Company Email" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Company Website Link *</label>
                                            <input name="company_website" value="{{$get_client_details->company_website}}" placeholder="Company Website Link" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Contact Number *</label>
                                            <input name="mobile" value="{{Auth::user()->mobile}}" placeholder="Contact Number" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Country *</label>
                                            <select class="selectbox" name="country" id="">                                                
                                                <option value="">Select Country</option>
                                                <?php if($countries){
                                                    foreach ($countries as $key => $country) {  ?>
                                                        <option <?php if($country->country_name == $get_client_details->country){  ?> selected <?php }  ?> value="{{$country->country_name}}">{{ $country->country_name }}</option> 
                                                  <?php  }
                                                } ?>                                                                                     
                                            </select>                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-style mb-20">
                                            <label for="">About Company *</label>
                                            <textarea name="about_company" id="" cols="30" rows="10" placeholder="About Company">{{$get_client_details->about_company}}</textarea>                                       
                                        </div>
                                    </div>                                                                                                                                                     
                                    <div class="col-lg-12 col-md-12 text-right">
                                        <button class="submit submit-auto-width btn btn-default" type="submit">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                        </form>                                                              
                    </div>
                </div>
            </div>
        </div>
     </section>    
</main>
<!-- End Content -->
@endsection