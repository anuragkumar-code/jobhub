@extends('agency.layout.head')
@section('agency')
<style type="text/css">
    button.view-type.gridview {
    border: none;
    background: none;
}

button.view-type.listview {
    border: none;
    background: none;
}
</style>
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
      <main class="main pad_remove">
        <section class="section-box-2">
            <div class="box-head-single none-bg">
                <div class="container">
                    <h4>There Are 65,866 Jobs<br>Here For you!</h4>
                    <div class="row mt-15 mb-40">
                        <div class="col-lg-7 col-md-9">
                            <span class="text-mutted">Discover your next career move, freelance gig, or
                                internship</span>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </section>
        
        @if(session()->has('success'))
                <div class="alert alert-info" role="alert">
                    <strong>{{session()->get('success')}}</strong>
                </div>
        @endif        
        
        <section class="section-box mt-80">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                        <div class="box-shadow-bdrd-15 box-filters" style="margin-bottom:20px;">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul class="nav nav-right float-start mt-0" role="tablist">
                                        <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">Projects Available ({{$get_projects_count}})</button></li>
                                        <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="false">Projects Applied ({{$appl_projects_count}})</button></li>                                        
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                    <div class="row flex-row-reverse">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1" >

                        <div class="content-page">                        
                            <div class="row">
                                <?php if($get_projects){
                                foreach ($get_projects as $key => $get_project) {  ?>                                
                                <div class="col-lg-12 col-md-12">
                                    <a href="{{ route('job_details',base64_encode($get_project->pid)) }}">
                                        <div class="list-recent-jobs padlistjob">                                        
                                            <div class="card-job hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">                    
                                                <div class="card-job-top">
                                                    <div class="card-job-top--image circleimg">
                                                        <figure><img alt="jobhub" src="{{ url('/profile/'.$get_project->company_logo)}}"></figure>
                                                    </div>
                                                    <div class="card-job-top--info">
                                                        <h6 class="card-job-top--info-heading">{{$get_project->job_title}}</h6>
                                                        <div class="row">
                                                            <div class="col-lg-7">
                                                                <span class="card-job-top--company">{{$get_project->company_name}}</span>
                                                                <span class="card-job-top--location text-sm"><i class="fi-rr-time-fast"></i> {{$get_project->duration}}</span>
                                                                <span class="card-job-top--type-job text-sm"><i class="fi-rr-briefcase"></i>{{$get_project->location}}</span>
                                                                <span class="card-job-top--post-time text-sm"><i class="fi-rr-clock"></i> <?php
                                                                    if($get_project->primary_skills!='')
                                                                    {
                                                                        $primary_skills = '';
                                                                        $all_primary_skills = explode(',',$get_project->primary_skills);
                                                                        foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                                            if(isset($get_primary_skills[$primary_skill_data])){
                                                                                $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                                            }
                                                                        }
                                                                    }?>
                                                                    <?php echo rtrim($primary_skills,','); ?></span>
                                                            </div>
                                                            <div class="col-lg-5 text-lg-end">
                                                                <span class="card-job-top--price">${{$get_project->budget}}<span>/{{$get_project->rate_type}}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-job-description mt-20">
                                                    <?php 
                                                        if(strlen($get_project->project_description) > 75){
                                                            $text = $get_project->project_description ;
                                                            $text_only_spaces = preg_replace('/\s+/', ' ', $text);
                                                            $text_truncated = substr($text_only_spaces, 0, strpos($text_only_spaces, " ", 150));
                                                            echo $text_truncated.'...';
                                                        }else{
                                                            echo $get_project->project_description;
                                                        }
                                                    ?>
                                                </div>
                                                <div class="card-job-bottom mt-25">
                                                    <div class="row">
                                                        <div class="col-lg-9 col-sm-8 col-12">                                                       
                                                            <?php if($get_project->skills!='')
                                                            { 
                                                                $count = 0;
                                                                $skills = '';
                                                                $all_skills = explode(',',$get_project->skills);                                           
                                                                    foreach($all_skills as $key => $skill_data)
                                                                    {
                                                                        $count++;
                                                                        
                                                                        if(isset($get_skills[$skill_data]))
                                                                        { ?>
                                                                            <span class="btn btn-small background-6"><?php echo $get_skills[$skill_data]; ?></span>
                                                            <?php  }  }} ?>                                                                                                                                                                            
                                                        </div>                                                    
                                                    </div>
                                                </div>
                                            </div>                                        
                                        </div>
                                    </a>
                                </div>
                                <?php  } } ?>                              
                            </div>                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                        <div class="content-page">                            
                            <div class="row">
                                <?php if($appl_projects){
                                    foreach ($appl_projects as $key => $appl_project) {  ?>                                
                                <div class="col-lg-12 col-md-12">
                                    <a href="{{route('applied_job_details',base64_encode($appl_project->pid)) }}">
                                        <div class="list-recent-jobs padlistjob">                                        
                                            <div class="card-job hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">                    
                                                <div class="card-job-top">
                                                    <div class="card-job-top--image circleimg">
                                                        <figure><img alt="jobhub" src="{{ url('/profile/'.$appl_project->company_logo)}}"></figure>
                                                    </div>
                                                    <div class="card-job-top--info">
                                                        <h6 class="card-job-top--info-heading">{{$appl_project->job_title}}</h6>
                                                        <div class="row">
                                                            <div class="col-lg-7">
                                                                <span class="card-job-top--company">{{$appl_project->company_name}}</span>
                                                                <span class="card-job-top--location text-sm"><i class="fi-rr-time-fast"></i> {{$appl_project->duration}}</span>
                                                                <span class="card-job-top--type-job text-sm"><i class="fi-rr-briefcase"></i>{{$appl_project->location}}</span>
                                                                <span class="card-job-top--post-time text-sm"><i class="fi-rr-clock"></i> <?php
                                                                    if($appl_project->primary_skills!='')
                                                                    {
                                                                        $primary_skills = '';
                                                                        $all_primary_skills = explode(',',$appl_project->primary_skills);
                                                                        foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                                            if(isset($get_primary_skills[$primary_skill_data])){
                                                                                $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                                            }
                                                                        }
                                                                    }?>
                                                                    <?php echo rtrim($primary_skills,','); ?></span>
                                                            </div>
                                                            <div class="col-lg-5 text-lg-end">
                                                                <span class="card-job-top--price">${{$appl_project->budget}}<span>/{{$appl_project->rate_type}}</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-job-description mt-20">
                                                    <?php 
                                                        if(strlen($appl_project->project_description) > 75){
                                                            $text = $appl_project->project_description ;
                                                            $text_only_spaces = preg_replace('/\s+/', ' ', $text);
                                                            $text_truncated = substr($text_only_spaces, 0, strpos($text_only_spaces, " ", 150));
                                                            echo $text_truncated.'...';
                                                        }else{
                                                            echo $appl_project->project_description;
                                                        }
                                                        ?>
                                                </div>
                                                <div class="card-job-bottom mt-25">
                                                    <div class="row">
                                                        <div class="col-lg-9 col-sm-8 col-12">                                                       
                                                            <?php if($appl_project->skills!='')
                                                            { 
                                                                $count = 0;
                                                                $skills = '';
                                                                $all_skills = explode(',',$appl_project->skills);                                           
                                                                    foreach($all_skills as $key => $skill_data)
                                                                    {
                                                                        $count++;
                                                                        
                                                                        if(isset($get_skills[$skill_data]))
                                                                        { ?>
                                                            <span class="btn btn-small background-6"><?php echo $get_skills[$skill_data]; ?></span>
                                                            <?php  } 
                                                                    }                                               
                                                            } ?>
                                                        </div>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </a>
                                </div>
                                <?php  }
                            } ?>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <form action="{{route('projectFilter')}}" method="post">
                            @csrf                       
                            <div class="sidebar-shadow none-shadow mb-30">
                                <div class="sidebar-filters">                                    
                                    <div class="filter-block mb-30">
                                        <h5 class="medium-heading mb-15">Location</h5>
                                        <div class="form-group">
                                            <ul class="list-checkbox">
                                                <?php if($get_locations){
                                                    foreach ($get_locations as $key => $get_location) {  ?>
                                                        <li>
                                                            <label class="cb-container">
                                                                <input type="checkbox" name="location[]" value="{{$get_location->location}}">
                                                                <span class="text-small">{{$get_location->location}}</span>
                                                                <span class="checkmark"></span>
                                                            </label>                                                    
                                                        </li>
                                                  <?php  }
                                                } ?>
                                            </ul>                                            
                                        </div>
                                    </div>
                                    <div class="filter-block mb-30">
                                        <h5 class="medium-heading mb-10">Experience Level</h5>
                                        <div class="form-group">
                                            <ul class="list-checkbox">
                                                <li>
                                                    <label class="cb-container">
                                                        <input type="checkbox" name="experience_level[]" value="2 years" <?php if (in_array("2 years", $experiences)){?>  checked="checked" <?php } ?> > <span class="text-small">2 years</span>
                                                        <span class="checkmark"></span>
                                                    </label>                                                    
                                                </li>
                                                <li>    
                                                    <label class="cb-container">
                                                        <input type="checkbox" name="experience_level[]" value="3 - 5 years" <?php if (in_array("3 - 5 years", $experiences)){?>  checked="checked" <?php } ?>> <span class="text-small">3 - 5 years</span>
                                                        <span class="checkmark"></span>
                                                    </label>                                                    
                                                </li>
                                                <li>
                                                    <label class="cb-container">
                                                        <input type="checkbox" name="experience_level[]" value="5 - 8 years" <?php if (in_array("5 - 8 years", $experiences)){?>  checked="checked" <?php } ?>> <span class="text-small">5 - 8 years</span>
                                                        <span class="checkmark"></span>
                                                    </label>                                                    
                                                </li>
                                                <li>
                                                    <label class="cb-container">
                                                        <input type="checkbox" name="experience_level[]" value="8+ years" <?php if (in_array("8+ years", $experiences)){?>  checked="checked" <?php } ?>> <span class="text-small">8+ years</span>
                                                        <span class="checkmark"></span>
                                                    </label>                                                    
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-block mb-40">
                                        <h5 class="medium-heading mb-25">Salary Range</h5>
                                        <div class="">
                                            <div class="row mb-20">
                                                <div class="col-sm-12">
                                                    <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="lb-slider">From</label>
                                                    <div class="form-group minus-input">
                                                        <input type="text" name="min-value-money" class="input-disabled form-control min-value-money" disabled="disabled" value="">
                                                        <input type="hidden" name="min_value" class="form-control min-value" value="50">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="lb-slider">To</label>
                                                    <div class="form-group">
                                                        <input type="text" name="max-value-money" class="input-disabled form-control max-value-money" disabled="disabled" value="">
                                                        <input type="hidden" name="max_value" class="form-control max-value" value="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons-filter">
                                        <button class="btn btn-default" type="submit">Apply filter</button>
                                        <button class="btn">Reset filter</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                        <div class="sidebar-with-bg">
                            <h5 class="font-semibold mb-10">Set job reminder</h5>
                            <p class="text-body-999">Enter you email address and get job notification.</p>
                            <div class="box-email-reminder">
                                <form>
                                    <div class="form-group mt-15">
                                        <input type="text" class="form-control input-bg-white form-icons" placeholder="Enter email address">
                                        <i class="fi-rr-envelope"></i>
                                    </div>
                                    <div class="form-group mt-25 mb-5">
                                        <button class="btn btn-default btn-md">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-with-bg background-primary bg-sidebar pb-80">
                            <h5 class="medium-heading text-white mb-20 mt-20">Recruiting?</h5>
                            <p class="text-body-999 text-white mb-30">Advertise your jobs to millions of monthly users
                                and
                                search 16.8 million CVs in our database.</p>
                            <a href="#" class="btn btn-border icon-chevron-right btn-white-sm">Post a Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    </main>


      <!-- End Content -->



<?php   } ?>

@endsection