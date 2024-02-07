@extends('agency.layout.head')
@section('agency')
    <!-- Content -->
    <main class="main pad_remove">  
        <section class="section-box-2">
            <div class="box-head-single none-bg">
                <div class="container">
                    <h4>There Are 968 Companies<br>Here For you!</h4>
                    <div class="row mt-15">
                        <div class="col-lg-7 col-md-9">
                            <span class="text-mutted">Discover your next career move, freelance gig, or
                                internship</span>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </section>

        <section class="section-box">
            <div class="container">
                <div class="col-lg-12 text-lg-end text-start wow animate__ animate__fadeInUp animated mt-20 mb-10" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"></div>     
                <div class="row flex-row-reverse">                
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                <div class="box-shadow-bdrd-15 box-filters" style="margin-bottom:20px;">
                    <div class="row">
                        <div class="col-lg-9 col-sm-8">
                            <ul class="nav nav-right float-start mt-0" role="tablist">
                                <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">All Resources (<?php echo $get_resources_count ?>)</button></li>
                                <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="false">Available Resources (<?php echo $get_available_resources_count ?>)</button></li>
                                <li class="wow animate__ animate__fadeIn animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;"><button id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three-1" aria-selected="false">Hired Resources (<?php echo $get_unavailable_resources_count ?>)</button></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-4"><a href="{{url('/agency/add_resources')}}" class="mt-sm-15 tabpad mt-lg-30 btn btn-default " style="float: right;">Add Resource</a></div>
                    </div>
                </div>

                @if(session()->has('success'))
                <div class="alert alert-info" id="myDIV" role="alert">
                    <strong>{{session()->get('success')}}</strong> 
                    <i class="fa fa-times closeiconsss" onclick="hide()" aria-hidden="true"></i>
                </div>
                @endif

                <div class="row flex-row-reverse">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1" >
                            <?php if($get_resources){
                                // echo "<pre>"; print_r($get_resources); exit;
                                foreach($get_resources as $key => $get_resource){
                                ?>
                                <div class="employers-list">
                                    <div class="card-employers hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-6 d-flex">
                                                <div class="employers-logo mr-15">                                                    
                                                    <?php if($get_resource->profile_img){?>                            
                                                        <figure><img src="{{url('/profile/'.$get_resource->profile_img)}}"></figure>
                                                    <?php }else{ ?>
                                                        <figure><img src="{{asset('images/ava_1.png')}}"></figure>
                                                    <?php } ?>                                                
                                                </div>
                                                <div class="employers-name">
                                                    <h5><strong><?php echo $get_resource->first_name; ?> <?php echo $get_resource->last_name; ?></strong></h5>
                                                    <span class="text-sm text-muted"><?php
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
                                                        <?php echo rtrim($primary_skills,','); ?>
                                                    </span>                                            
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="employers-info d-flex align-items-center">
                                                    <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> {{$get_resource->availability}}</span>
                                                    <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i> <?php if($get_resource->currency == 1){ echo "₹"; }elseif($get_resource->currency == 2){echo "$";} ?>{{$get_resource->pay}} / {{$get_resource->billing}}</span>
                                                </div>
                                                <div class="job-tags mt-25">                                                    
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
                                            </div>
                                            <div class="col-lg-3 text-lg-end d-lg-block d-none">
                                                {{-- <div class="card-grid-2-link">
                                                    <a href="#"><i class="fi-rr-shield-check"></i></a>
                                                    <a href="#"><i class="fi-rr-bookmark"></i></a>
                                                </div> --}}
                                                <div class="mt-25">
                                                    <a href="{{route('resourceDetails',base64_encode($get_resource->id))}}" class="btn btn-border btn-brand-hover">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                             
                                </div>
                            <div class="resourcesbox" style="display: none;">
                                <div class="heading-image-rd">
                                    <?php if($get_resource->profile_img){?>                            
                                        <img src="{{url('/profile/'.$get_resource->profile_img)}}">
                                <?php }else{ ?>
                                        <img src="{{asset('images/ava_1.png')}}">
                                <?php } ?>
                                </div>
                                <div class="heading-main-info">
                                    <h4><?php echo $get_resource->first_name; ?> <?php echo $get_resource->last_name; ?></h4>
                                    <div class="head-info-profile">
                                        <span class="mr-20"> <strong><?php
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
                                            <?php echo rtrim($primary_skills,','); ?></strong> - <?php echo $get_resource->designation; ?> (<?php echo $get_resource->experience; ?>)</span>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-lg-12">
                                            <span class="btn btn-tags-sm mb-10 mr-5"><?php $skills = ''; if($get_resource->skills!='')
                                                { 
                                                    
                                                    $all_skills = explode(',',$get_resource->skills);                                           
                                                        foreach($all_skills as $key => $skill_data)
                                                        {
                                                            if(isset($get_skills[$skill_data]))
                                                            {
                                                            $skills.=$get_skills[$skill_data].',';
                                                            }
                                                        }                                               
                                                } ?><?php echo rtrim($skills,','); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 pt-20" style="border-top: solid 1px #e6e8e9; text-align: right;">
                                    <a href="{{url('/resumes/'.$get_resource->resume)}}"><i class="fa fa-download" aria-hidden="true"></i> Download Resume</a>
                                    <a href="#" class="btn btn-default ml-10"><i class="fa fa-briefcase" aria-hidden="true"></i> My previous work</a>
                                </div>
                            </div>
                        <?php      }
                        } ?>                
                        </div>
                        <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                            <?php if($get_available_resources){
                                // echo "<pre>"; print_r($get_available_resources); exit;
                                foreach($get_available_resources as $key => $get_available_resource){
                                ?>
                            
                            
                                <div class="employers-list">
                                    <div class="card-employers hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-6 d-flex">
                                                <div class="employers-logo mr-15">
                                                    
                                                    <?php if($get_available_resource->profile_img){?>                            
                                                        <figure><img src="{{url('/profile/'.$get_available_resource->profile_img)}}"></figure>
                                                    <?php }else{ ?>
                                                        <figure><img src="{{asset('images/ava_1.png')}}"></figure>
                                                    <?php } ?>
                                                
                                                </div>
                                                <div class="employers-name">
                                                    <h5><a href="candidates-single.html"><strong><?php echo $get_available_resource->first_name; ?> <?php echo $get_available_resource->last_name; ?></strong></a></h5>
                                                    <span class="text-sm text-muted"><?php
                                                        if($get_available_resource->primary_skills!='')
                                                        {
                                                            $primary_skills = '';
                                                            $all_primary_skills = explode(',',$get_available_resource->primary_skills);
                                                            foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                                if(isset($get_primary_skills[$primary_skill_data])){
                                                                    $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                                        }
                                                                # code...
                                                            }
                                                        }?>
                                                        <?php echo rtrim($primary_skills,','); ?></span>                                            
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="employers-info d-flex align-items-center">
                                                    <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> {{$get_available_resource->availability}}</span>
                                                    <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>${{$get_available_resource->pay}} / hour</span>
                                                </div>
                                                <div class="job-tags mt-25">
                                                    
                                                    <?php if($get_available_resource->skills!='')
                                                    { 
                                                        $skills = '';
                                                        $all_skills = explode(',',$get_available_resource->skills);                                           
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
                                            <div class="col-lg-3 text-lg-end d-lg-block d-none">
                                                {{-- <div class="card-grid-2-link">
                                                    <a href="#"><i class="fi-rr-shield-check"></i></a>
                                                    <a href="#"><i class="fi-rr-bookmark"></i></a>
                                                </div> --}}
                                                <div class="mt-25">
                                                    <a href="{{route('resourceDetails',base64_encode($get_available_resource->id))}}" class="btn btn-border btn-brand-hover">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                             
                                </div>
                            
                            
                            <div class="resourcesbox" style="display: none;">
                                <div class="heading-image-rd">
                                    <?php if($get_available_resource->profile_img){?>                            
                                        <img src="{{url('/profile/'.$get_available_resource->profile_img)}}">
                                <?php }else{ ?>
                                        <img src="{{asset('images/ava_1.png')}}">
                                <?php } ?>
                                </div>
                                <div class="heading-main-info">
                                    <h4><?php echo $get_available_resource->first_name; ?> <?php echo $get_available_resource->last_name; ?></h4>
                                    <div class="head-info-profile">
                                        <span class="mr-20"> <strong><?php
                                            if($get_available_resource->primary_skills!='')
                                            {
                                                $primary_skills = '';
                                                $all_primary_skills = explode(',',$get_available_resource->primary_skills);
                                                foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                    if(isset($get_primary_skills[$primary_skill_data])){
                                                        $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                            }
                                                    # code...
                                                }
                                            }?>
                                            <?php echo rtrim($primary_skills,','); ?></strong> - <?php echo $get_available_resource->designation; ?> (<?php echo $get_available_resource->experience; ?>)</span>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-lg-12">
                                            <span class="btn btn-tags-sm mb-10 mr-5"><?php $skills = ''; if($get_available_resource->skills!='')
                                                { 
                                                    
                                                    $all_skills = explode(',',$get_available_resource->skills);                                           
                                                        foreach($all_skills as $key => $skill_data)
                                                        {
                                                            if(isset($get_skills[$skill_data]))
                                                            {
                                                            $skills.=$get_skills[$skill_data].',';
                                                            }
                                                        }                                               
                                                } ?><?php echo rtrim($skills,','); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 pt-20" style="border-top: solid 1px #e6e8e9; text-align: right;">
                                    <a href="{{url('/resumes/'.$get_available_resource->resume)}}"><i class="fa fa-download" aria-hidden="true"></i> Download Resume</a>
                                    <a href="#" class="btn btn-default ml-10"><i class="fa fa-briefcase" aria-hidden="true"></i> My previous work</a>
                                </div>
                            </div>
                            <?php      }
                            } ?>
                        </div>
                        <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                            <?php if($get_unavailable_resources){
                                // echo "<pre>"; print_r($get_unavailable_resources); exit;
                                foreach($get_unavailable_resources as $key => $get_unavailable_resource){
                                ?>
                            
                            
                                <div class="employers-list">
                                    <div class="card-employers hover-up wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-6 d-flex">
                                                <div class="employers-logo mr-15">
                                                    
                                                    <?php if($get_unavailable_resource->profile_img){?>                            
                                                        <figure><img src="{{url('/profile/'.$get_unavailable_resource->profile_img)}}"></figure>
                                                    <?php }else{ ?>
                                                        <figure><img src="{{asset('images/ava_1.png')}}"></figure>
                                                    <?php } ?>
                                                
                                                </div>
                                                <div class="employers-name">
                                                    <h5><a href="candidates-single.html"><strong><?php echo $get_unavailable_resource->first_name; ?> <?php echo $get_unavailable_resource->last_name; ?></strong></a></h5>
                                                    <span class="text-sm text-muted"><?php
                                                        if($get_unavailable_resource->primary_skills!='')
                                                        {
                                                            $primary_skills = '';
                                                            $all_primary_skills = explode(',',$get_unavailable_resource->primary_skills);
                                                            foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                                if(isset($get_primary_skills[$primary_skill_data])){
                                                                    $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                                        }
                                                                # code...
                                                            }
                                                        }?>
                                                        <?php echo rtrim($primary_skills,','); ?></span>                                            
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="employers-info d-flex align-items-center">
                                                    <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> {{$get_unavailable_resource->availability}}</span>
                                                    <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>${{$get_unavailable_resource->pay}} / hour</span>
                                                </div>
                                                <div class="job-tags mt-25">
                                                    
                                                    <?php if($get_unavailable_resource->skills!='')
                                                    { 
                                                        $skills = '';
                                                        $all_skills = explode(',',$get_unavailable_resource->skills);                                           
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
                                            <div class="col-lg-3 text-lg-end d-lg-block d-none">
                                                {{-- <div class="card-grid-2-link">
                                                    <a href="#"><i class="fi-rr-shield-check"></i></a>
                                                    <a href="#"><i class="fi-rr-bookmark"></i></a>
                                                </div> --}}
                                                <div class="mt-25">
                                                    <a href="{{route('resourceDetails',base64_encode($get_unavailable_resource->id))}}" class="btn btn-border btn-brand-hover">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                             
                                </div>
                            
                            
                            <div class="resourcesbox" style="display: none;">
                                <div class="heading-image-rd">
                                    <?php if($get_unavailable_resource->profile_img){?>                            
                                        <img src="{{url('/profile/'.$get_unavailable_resource->profile_img)}}">
                                <?php }else{ ?>
                                        <img src="{{asset('images/ava_1.png')}}">
                                <?php } ?>
                                </div>
                                <div class="heading-main-info">
                                    <h4><?php echo $get_unavailable_resource->first_name; ?> <?php echo $get_unavailable_resource->last_name; ?></h4>
                                    <div class="head-info-profile">
                                        <span class="mr-20"> <strong><?php
                                            if($get_unavailable_resource->primary_skills!='')
                                            {
                                                $primary_skills = '';
                                                $all_primary_skills = explode(',',$get_unavailable_resource->primary_skills);
                                                foreach ($all_primary_skills as $key => $primary_skill_data) {
                                                    if(isset($get_primary_skills[$primary_skill_data])){
                                                        $primary_skills.=$get_primary_skills[$primary_skill_data].',';
                                                            }
                                                    # code...
                                                }
                                            }?>
                                            <?php echo rtrim($primary_skills,','); ?></strong> - <?php echo $get_unavailable_resource->designation; ?> (<?php echo $get_unavailable_resource->experience; ?>)</span>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-lg-12">
                                            <a href="#" class="btn btn-tags-sm mb-10 mr-5"><?php $skills = ''; if($get_unavailable_resource->skills!='')
                                                { 
                                                    
                                                    $all_skills = explode(',',$get_unavailable_resource->skills);                                           
                                                        foreach($all_skills as $key => $skill_data)
                                                        {
                                                            if(isset($get_skills[$skill_data]))
                                                            {
                                                            $skills.=$get_skills[$skill_data].',';
                                                            }
                                                        }                                               
                                                } ?><?php echo rtrim($skills,','); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20 pt-20" style="border-top: solid 1px #e6e8e9; text-align: right;">
                                    <a href="{{url('/resumes/'.$get_unavailable_resource->resume)}}"><i class="fa fa-download" aria-hidden="true"></i> Download Resume</a>
                                    <a href="#" class="btn btn-default ml-10"><i class="fa fa-briefcase" aria-hidden="true"></i> My previous work</a>
                                </div>
                            </div>
                            <?php      }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
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
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 272.778px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hw1x-container"><span class="select2-selection__rendered" id="select2-hw1x-container" role="textbox" aria-readonly="true" title="Ui/UX design">Ui/UX design</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                    <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 1.5%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 60%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
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
                                <a href="#" class="btn btn-border icon-chevron-right btn-white-sm">Post a Job</a>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </section>   
    </main>
    <!-- End Content -->
@endsection