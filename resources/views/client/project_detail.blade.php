@extends('client.layout.head')
@section('client')

    <!-- Content -->
    <main class="main pad_remove">
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="job-single-header mb-50">
                            <h3 class="mb-15">{{$get_project_detail->job_title}}</h3>
                            <div class="job-meta">
                                <span class="company">{{$get_project_detail->company_name}}</span>
                                <span class="location text-sm"><i class="fi-rr-marker"></i> {{$get_project_detail->location}}</span>
                                <span class="type-job text-sm"><i class="fi-rr-briefcase"></i> {{$get_project_detail->job_type}}</span>
                                <span class="post-time text-sm"><i class="fi-rr-clock"></i> {{date('d-M-Y',strtotime($get_project_detail->created_at))}}</span>
                            </div>
                            <div class="job-tags mt-30">
                                <?php $skills = ''; 
                                if($get_project_detail->skills!='')
                                        { 
                                        $count = 0;
                                        
                                        $all_skills = explode(',',$get_project_detail->skills);                                           
                                        foreach($all_skills as $key => $skill_data)
                                            {
                                                $count++;                                                                
                                                if(isset($get_skills[$skill_data]))
                                                { ?>
                                <span class="btn btn-tags-sm mb-10 mr-5"><?php echo $get_skills[$skill_data]; ?></span>   
                                <?php  } 
                                        }                                               
                                         } ?>                         
                            </div>
                        </div>
                        <div class="job-overview">
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                    <div class="sidebar-text-info ml-10">
                                        <span class="text-description mb-10">Job Type</span>
                                        <strong class="small-heading">{{$get_project_detail->job_type}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                    <div class="sidebar-text-info ml-10">
                                        <span class="text-description mb-10">Location</span>
                                        <strong class="small-heading">{{$get_project_detail->location}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                    <div class="sidebar-text-info ml-10">
                                        <span class="text-description mb-10">Budget</span>
                                        <strong class="small-heading">${{$get_project_detail->budget}}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-md-4 d-flex">
                                    <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                    <div class="sidebar-text-info ml-10">
                                        <span class="text-description mb-10">Date posted</span>
                                        <strong class="small-heading">{{date('d-M-Y',strtotime($get_project_detail->created_at))}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                    <div class="sidebar-text-info ml-10">
                                        <span class="text-description mb-10">Duration</span>
                                        <strong class="small-heading">{{$get_project_detail->duration}}</strong>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                    <div class="sidebar-text-info ml-10">
                                        <span class="text-description mb-10">Job Title</span>
                                        <strong class="small-heading">{{ $get_project_detail->job_title }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="content-single">
                            <h5>Project Details</h5>
                            <p>{{$get_project_detail->project_description}}</p>
                        </div>                                              
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                        <div class="sidebar-shadow">
                            <div class="sidebar-heading">
                                <div class="avatar-sidebar">
                                    <figure><img alt="jobhub" src="{{url('/profile/'.$get_project_detail->company_logo)}}"></figure>
                                    <div class="sidebar-info">
                                        <span class="sidebar-company">{{$get_project_detail->company_name}}</span>
                                        <span class="sidebar-website-text">{{$get_project_detail->company_website}}</span>
                                        <div class="dropdowm">
                                            <button class="btn btn-dots btn-dots-abs-right dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <ul class="dropdown-menu dropdown-menu-light">
                                                <li><a class="dropdown-item" href="#">Contact</a></li>
                                                <li><a class="dropdown-item" href="#">Bookmark</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-description mt-15">
                                {{-- We're looking to add more product designers to our growing teams. --}}
                                {{ $get_project_detail->about_company }}
                            </div>
                            <div class="text-start mt-20">
                                {{-- <a href="{{route('project_profile_details',base64_encode($get_project_detail->pid))}}" class="btn btn-default mr-10">Edit Project</a> --}}
                            </div>                       
                            
                           
                        </div>

                        <div class="sidebar-shadow">
                            <div class="block-tags">
                                <?php $skills = ''; 
                                if($get_project_detail->skills!='')
                                        { 
                                        $count = 0;
                                        
                                        $all_skills = explode(',',$get_project_detail->skills);                                           
                                        foreach($all_skills as $key => $skill_data)
                                            {
                                                $count++;                                                                
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

                <?php if($get_resources){ ?>
                <div class="row">
                    <div class="single-recent-jobs">
                        <h4 class="heading-border"><span>Replies</span></h4>                        
                    </div>
                    <div class="employers-list">
                        <?php foreach ($get_resources as $key => $get_resource) {  ?>
                        <div class="card-employers hover-up wow animate__animated animate__fadeIn">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6 d-flex">
                                    <div class="employers-logo mr-15">
                                        <span>
                                            <figure><img alt="jobhub" src="{{url('/profile/'.$get_resource->profile_img)}}" /></figure>
                                        </span>
                                    </div>
                                    <div class="employers-name">
                                        <h5><span><strong>{{$get_resource->first_name}} {{$get_resource->last_name}}</strong></span></h5>
                                        <span class="text-sm text-muted company_name">{{$get_resource->company_name}}</span>                                            
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="employers-info d-flex align-items-center">
                                        <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> {{$get_resource->availability}}</span>
                                        <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>${{$get_resource->pay}}/ hour</span>
                                    </div>
                                    <div class="job-tags mt-25">
                                        <span class="btn btn-tags-sm mb-10 mr-5">Figma</span>
                                        <span class="btn btn-tags-sm mb-10 mr-5">Adobe XD</span>
                                        <span class="btn btn-tags-sm mb-10 mr-5">PSD</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-lg-end d-lg-block d-none">                                            
                                    <div class="mt-25">
                                        <a href="{{URL('client/project/resource_detail',base64_encode($get_resource->rid))}}/<?php echo base64_encode($get_project_detail->pid); ?>" class="btn btn-border btn-brand-hover">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <?php   }  ?>                                                                                                                                              
                    </div>
                </div>
                <?php } ?>

            </div>
        </section>
      
    </main>
    <!-- End Content -->
   
    <script type="text/javascript">
        $(document).ready(function(){
            $('.check_skills').click(function(){
                let dataid = $(this).attr(data-id);
    
                alert(dataid);
            });
        });
    </script>

    <style>
        .company_name {
            font-weight: bold;
            color: #9777fa !important;
            font-size: 12px;
        }
    </style>

@endsection