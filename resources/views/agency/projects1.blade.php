@extends('agency.layout.head')
@section('agency')
    <?php
    if($get_resources_count < 2){ ?>
    <!-- Content -->
    <main class="main panelbg">     
        <section class="section-box mt-80">
            <div class="col-lg-12 text-center wow animate__ animate__fadeInUp  mt-20 mb-10 animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <a href="{{url('/agency/add_resources')}}" class="mt-sm-15 mt-lg-30 btn btn-default ">Add Resource</a>
            </div>          
            <img src="{{asset('images/bluredproject.png')}}" alt="">
        </section>      
    </main>
    <!-- End Content -->
    <?php } else{  ?>
          <!-- Content -->
    <main class="main panelbg">       
        <section class="section-box mt-80"> 
            @if(session()->has('success'))
                <div class="alert alert-info" role="alert">
                    <strong>{{session()->get('success')}}</strong> 
                </div>
            @endif         
            <div class="container">
                <div class="row">
                    <?php if($get_projects){
                        foreach ($get_projects as $key => $get_project) {  ?>
                           <div class="col-lg-4 col-md-6">
                            <div class="card-grid-2 hover-up">
                                <div class="text-center card-grid-2-image">
                                    <a href="{{ route('job_details',base64_encode($get_project->id)) }}">
                                        <figure><img src="{{url('/job_logo/'.$get_project->project_logo)}}" alt="jobhub"></figure>
                                    </a>
                                </div>
                                <div class="card-block-info">
                                    <div class="row">
                                        <div class="col-lg-7 col-6">
                                            <a href="employers-single.html" class="card-2-img-text">
                                                <span class="card-grid-2-img-small"><img src="{{asset('images/home/logo-1.svg')}}" alt="jobhub"></span> <span>Alithemes</span>
                                            </a>
                                        </div>
                                        <div class="col-lg-5 col-6 text-end">
                                            <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                        </div>
                                    </div>
                                    <h5 class="mt-20"><a href="#"><?php echo $get_project->job_title ?> </a></h5>
                                    <div class="mt-15">
                                        <span class="card-time">3 mins ago</span>
                                        <span class="card-location"><?php echo $get_project->city ?></span>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-8">
                                                <span class="card-text-price"> $<?php echo $get_project->budget ?><span>/Month</span> </span>
                                            </div>
                                            <div class="col-lg-5 col-4 text-end">
                                                <span><img src="{{asset('images/home/shield-check.svg')}}" alt="jobhub"></span>
                                                <span class="ml-5"><img src="{{asset('images/home/bookmark.svg')}}" alt="jobhub"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php  }
                    } ?>
                </div>
            </div>
        </section>      
    </main>

    <!-- End Content -->



  <?php   } ?>

@endsection