@extends('client.layout.head')
@section('client')

<?php if($project == 0){ ?> 
 <!-- Content -->
 <main class="main panelbg">
    <section class="section-box">
        <div class="box-head-single box-head-single-candidate">
            <div class="container">
                <h3>Header banner</h3>
                <h5>Some text goes here</h5>
            </div>
        </div>
    </section>

    <section class="section-box mt-50">
        <div class="container">
            <!--<div class="row align-items-end">                -->
            <!--    <div class="col-lg-12">-->
            <!--        <ul class="nav nav-right" style="margin-top: 10px; float: left;" role="tablist">-->
            <!--            <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">Active</button></li>-->
            <!--            <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="true" class="active">Deactive</button></li>-->
            <!--            <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><button id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three-1" aria-selected="true" class="active">My Team</button></li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="mt-70 text-center">
                <a href="{{url('/client/postjob')}}" class="btn btn-default">Post A Job</a>
            </div>
        </div>
    </section>

</main>
<!-- End Content -->
<?php } else { ?>
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
        
        <section class="section-box mt-80">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                        <div class="box-shadow-bdrd-15 box-filters" style="margin-bottom:20px;">
                            <div class="row">
                                <div class="col-lg-9">
                                    <ul class="nav nav-right float-start mt-0" role="tablist">
                                        <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">Active Projects ({{$get_active_projects_count}})</button></li>
                                        <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="false">Inactive Projects (0)</button></li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>
                        
                        @if(session()->has('success'))
                        <div class="alert alert-info" role="alert">
                            <strong>{{session()->get('success')}}</strong>
                            <i class="fa fa-times closeiconsss" onclick="hide()" aria-hidden="true"></i>
                        </div>
                        @endif
                        
                        <div class="content-page">
                            {{-- <div class="box-filters-job mt-15 mb-10">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <span class="text-small">Showing <strong>41-60 </strong>of <strong>944 </strong>jobs</span>
                                    </div>                                    
                                </div>
                            </div> --}}
                            <div class="row">
                            <?php if($get_active_projects){ 
                                    foreach($get_active_projects as $key => $get_active_project){ ?>                             
                                <div class="col-lg-12 col-md-12">
                                <a href="{{ route('project_details',base64_encode($get_active_project->pid)) }}">
                                    <div class="list-recent-jobs padlistjob">                                        
                                        <div class="card-job hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">                    
                                            <div class="card-job-top">
                                            <?php if($get_active_project->project_logo) { ?>
                                                <div class="card-job-top--image circleimg">
                                                    <figure><img alt="jobhub" src="{{url('/profile/'.$get_active_project->project_logo)}}"></figure>
                                                </div>
                                            <?php } else { ?> 
                                                  <div class="card-job-top--image circleimg">
                                                    <figure><img alt="jobhub" src="images/img-candidate.png"></figure>
                                                </div>  
                                            <?php } ?>
                                                <div class="card-job-top--info">
                                                    <h6 class="card-job-top--info-heading">{{$get_active_project->job_title}}</h6>
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <span class="card-job-top--company">{{$get_active_project->company_name}}</span>
                                                            <span class="card-job-top--location text-sm"><i class="fi-rr-time-fast"></i> {{$get_active_project->duration}}</span>
                                                            <span class="card-job-top--type-job text-sm"><i class="fi-rr-briefcase"></i>{{$get_active_project->location}}</span>
                                                            <span class="card-job-top--post-time text-sm"><i class="fi-rr-clock"></i> <?php
                                                                if($get_active_project->primary_skills!='')
                                                                {
                                                                    $primary_skills = '';
                                                                    $all_primary_skills = explode(',',$get_active_project->primary_skills);
                                                                    foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                                        if(isset($get_primary_skills[$primary_skill_data])){
                                                                            $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                                        }
                                                                    }
                                                                }?>
                                                                <?php echo rtrim($primary_skills,','); ?></span>
                                                        </div>
                                                        <div class="col-lg-5 text-lg-end">
                                                            <span class="card-job-top--price">${{$get_active_project->budget}}<span>/Hour</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-job-description mt-20">
                                                <?php 
                                                    if(strlen($get_active_project->project_description) > 75){
                                                        $text = $get_active_project->project_description ;
                                                        $text_only_spaces = preg_replace('/\s+/', ' ', $text);
                                                        $text_truncated = substr($text_only_spaces, 0, strpos($text_only_spaces, " ", 150));
                                                        echo $text_truncated.'...';
                                                    }else{
                                                        echo $get_active_project->project_description;
                                                    }
                                                    ?>
                                            </div>
                                            <div class="card-job-bottom mt-25">
                                                <div class="row">
                                                    <div class="col-lg-9 col-sm-8 col-12">                                                       
                                                        <?php if($get_active_project->skills!='')
                                                        { 
                                                            $count = 0;
                                                            $skills = '';
                                                            $all_skills = explode(',',$get_active_project->skills);                                           
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
                            <div class="paginations">

                            
                                <!-- <ul class="pager">
                                    <li><a href="#" class="pager-prev"></a></li>
                                    <li><a href="#" class="pager-number">1</a></li>
                                    <li><a href="#" class="pager-number">2</a></li>
                                    <li><a href="#" class="pager-number">3</a></li>
                                    <li><a href="#" class="pager-number">4</a></li>
                                    <li><a href="#" class="pager-number">5</a></li>
                                    <li><a href="#" class="pager-number active">6</a></li>
                                    <li><a href="#" class="pager-number">7</a></li>
                                    <li><a href="#" class="pager-next"></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-with-bg">
                            <h5 class="font-semibold mb-10">Set job reminder</h5>
                            <p class="text-body-999">Enter you email address and get job notification.</p>
                            <div class="box-email-reminder">
                                {{-- <form>
                                    <div class="form-group mt-15">
                                        <input type="text" class="form-control input-bg-white form-icons" placeholder="Enter email address">
                                        <i class="fi-rr-envelope"></i>
                                    </div>
                                    <div class="form-group mt-25 mb-5">
                                        <button class="btn btn-default btn-md">Submit</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                        {{-- <div class="sidebar-shadow none-shadow mb-30">
                            <div class="sidebar-filters">
                                <div class="filter-block mb-30">
                                    <h5 class="medium-heading mb-15">Location</h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-icons" placeholder="Location">
                                        <i class="fi-rr-marker"></i>
                                    </div>
                                </div>
                                <div class="filter-block mb-30">
                                    <h5 class="medium-heading mb-15">Categoy</h5>
                                    <div class="form-group select-style select-style-icon">
                                        <select class="form-control form-icons select-active select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3">Ui/UX design</option>
                                            <option>Ui/UX design 1</option>
                                            <option>Ui/UX design 2</option>
                                            <option>Ui/UX design 3</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 272.778px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-2h6g-container"><span class="select2-selection__rendered" id="select2-2h6g-container" role="textbox" aria-readonly="true" title="Ui/UX design">Ui/UX design</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <i class="fi-rr-briefcase"></i>
                                    </div>
                                </div>
                                <div class="filter-block mb-30">
                                    <h5 class="medium-heading mb-15">Job type</h5>
                                    <div class="form-group">
                                        <ul class="list-checkbox">
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Full Time
                                                        Jobs</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">235</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox" checked="checked"> <span class="text-small">Part Time
                                                        Jobs</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">28</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox" checked="checked"> <span class="text-small">Remote
                                                        Jobs</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">67</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Freelance</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">92</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Temporary</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">14</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="filter-block mb-30">
                                    <h5 class="medium-heading mb-10">Experience Level</h5>
                                    <div class="form-group">
                                        <ul class="list-checkbox">
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Expert</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">76</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Senior</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">89</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox" checked="checked"> <span class="text-small">Junior</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">54</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox" checked="checked"> <span class="text-small">Regular</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">23</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Internship</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">22</span>
                                            </li>
                                            <li>
                                                <label class="cb-container">
                                                    <input type="checkbox"> <span class="text-small">Associate</span>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="number-item">14</span>
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
                                                    <input type="hidden" name="min-value" class="form-control min-value" value="1500">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="lb-slider">To</label>
                                                <div class="form-group">
                                                    <input type="text" name="max-value-money" class="input-disabled form-control max-value-money" disabled="disabled" value="">
                                                    <input type="hidden" name="max-value" class="form-control max-value" value="60000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-filter">
                                    <button class="btn btn-default">Apply filter</button>
                                    <button class="btn">Reset filter</button>
                                </div>
                            </div>
                        </div> --}}
                        <div class="sidebar-with-bg background-primary bg-sidebar pb-80">
                            <h5 class="medium-heading text-white mb-20 mt-20">Recruiting?</h5>
                            <p class="text-body-999 text-white mb-30">Advertise your jobs to millions of monthly users
                                and
                                search 16.8 million CVs in our database.</p>
                            {{-- <a href="#" class="btn btn-border icon-chevron-right btn-white-sm">Post a Job</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    </main>


      <!-- End Content -->


<?php }  ?>

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


@endsection