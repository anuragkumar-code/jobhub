@extends('agency.layout.head')
@section('agency')

 <!-- Content -->
 <main class="main pad_remove">
    <section class="section-box">
        <div class="box-head-single box-head-single-candidate">
            <div class="container">
                <div class="heading-image-rd">
                    <span>
                        <figure><img alt="jobhub" src="{{url('/profile/'.$get_resource->profile_img)}}"></figure>
                    </span>
                </div>
                <div class="heading-main-info">
                    <h4>{{$get_resource->first_name}}&nbsp;{{$get_resource->last_name}}</h4>
                    <div class="head-info-profile">
                        <span class="text-small mr-20">{{$get_resource->designation}}</span>
                        <span class="text-small mr-20"><i class="fi-rr-briefcase text-mutted"></i> <?php
                            if($get_resource->primary_skills!='')
                            {
                                $primary_skills = '';
                                $all_primary_skills = explode(',',$get_resource->primary_skills);
                                foreach ($all_primary_skills as $key => $primary_skill_data) {
                                    if(isset($get_primary_skills[$primary_skill_data])){
                                        $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                            }
                                    # code...
                                }
                            }?>
                            <?php echo rtrim($primary_skills,','); ?></span>
                        <span class="text-small"><i class="fi-rr-clock text-mutted"></i> <?php if($get_resource->currency == 1){ echo "₹"; }elseif($get_resource->currency == 2){echo "$";} ?> {{$get_resource->pay}} / {{$get_resource->billing}}</span>
                        
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <?php if($get_resource->skills!='')
                                    { 
                                      $skills = '';
                                      $all_skills = explode(',',$get_resource->skills);                                           
                                      foreach($all_skills as $key => $skill_data)
                                        {
                                           if(isset($get_skills[$skill_data]))
                                            { ?>
                                                <span class="btn btn-tags-sm mb-10 mr-5"><?php echo $get_skills[$skill_data]; ?></span>  
                                            <?php  } 
                                         }                                               
                                     } ?>
                        </div>
                        <div class="col-lg-4">                            
                            {{-- <a href="{{route('editResource',base64_encode($get_resource->id))}}" class="btn editbtnsss">Edit Profile</a>  --}}
                            <a href="{{url('/resumes/'.$get_resource->resume)}}" class="btn btn-default">Download CV</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="content-single">
                        <h4 class="mb-20">Biography</h4>
                        <p>
                            {{$get_resource->bio}}
                        </p>
                                            
                        <div class="divider"></div>
                        <h4 class="mt-30 mb-30">Work Process</h4>
                        <img src="{{asset('images/work-order-management-process.svg')}}" alt="jobhub">
                    </div>
                    <div class="single-recent-jobs">
                        <h4 class="heading-border"><span>Completed Jobs</span></h4>
                        <div class="list-recent-jobs">
                            <?php if($get_resource_projects){
                                foreach ($get_resource_projects as $key => $get_resource_project) { ?>
                                    <div class="card-job hover-up wow animate__animated animate__fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <div class="card-job-top">
                                            
                                            <div class="resource-card">
                                                <h6 class="card-job-top--info-heading"><span>{{$get_resource_project->project_name}}</span></h6>
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        
                                                        <span class="card-job-top--location text-sm"><i class="fi-rr-calendar"></i>
                                                           Start Date <label class="text-bold">{{date('d-M-Y',strtotime($get_resource_project->start_date))}}</label></span>
                                                        <span class="card-job-top--type-job text-sm datetext"><i class="fi-rr-calendar"></i>
                                                            End Date <label class="text-bold">{{date('d-M-Y',strtotime($get_resource_project->end_date))}}</label></span>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-job-description mt-20">
                                            {!!$get_resource_project->project_desc !!}
                                        </div>
                                        <div class="card-job-bottom mt-25">
                                            <div class="row">
                                                <div class="col-lg-9 col-sm-8 col-12">
                                                    <?php if($get_resource_project->skills!='')
                                                            { 
                                                            $skills = '';
                                                            $all_skills = explode(',',$get_resource_project->skills);                                           
                                                            foreach($all_skills as $key => $skill_data)
                                                                {
                                                                if(isset($get_skills[$skill_data]))
                                                                    { ?>
                                                                        <span class="btn btn-tags-sm mb-10 mr-5"><?php echo $get_skills[$skill_data]; ?></span>  
                                                                    <?php  } 
                                                                }                                               
                                                            } ?>
                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                              <?php  }
                            } ?>
                                                      
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-shadow">
                        <h5 class="font-bold">Overview</h5>
                        <div class="sidebar-list-job mt-10">
                            <ul>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Experience</span>
                                        <strong class="small-heading">{{$get_resource->experience}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Availability</span>
                                        <strong class="small-heading">{{$get_resource->availability}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Salary</span>
                                        <strong class="small-heading"> <?php if($get_resource->currency == 1){ echo "₹"; }elseif($get_resource->currency == 2){echo "$";} ?>{{$get_resource->pay}} per {{$get_resource->billing}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Member since</span>
                                        <strong class="small-heading">{{date('M Y',strtotime($get_resource->created_at))}}</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Content -->


@endsection