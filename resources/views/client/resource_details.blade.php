@extends('client.layout.head')
@section('client')

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
                            if($get_resource->rps!='')
                            {
                                $rps = '';
                                $all_primary_skills = explode(',',$get_resource->rps);
                                foreach ($all_primary_skills as $key => $primary_skill_data) {
                                    if(isset($get_primary_skills[$primary_skill_data])){
                                        $rps.=$get_primary_skills[$primary_skill_data].',';
                                            }
                                    
                                }
                            }?>
                            <?php echo rtrim($rps,','); ?></span>
                        <span class="text-small"><i class="fi-rr-clock text-mutted"></i> <?php if($get_resource->currency == 1){ echo "₹"; }elseif($get_resource->currency == 2){echo "$";} ?> {{$get_resource->pay}} / {{$get_resource->billing}}</span>
                        
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <?php if($get_resource->rskills!='')
                                    { 
                                        $rskills = '';
                                        $all_skills = explode(',',$get_resource->rskills);                                           
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
                            <?php if($applied != 3 && $applied != 4){ ?>
                                <a href="{{url('/client/project/reply/reject',base64_encode($get_resource->rid))}}/<?php echo base64_encode($pid); ?>" class="btn editbtnsss">Reject</a> 
                            <?php }  ?>
                            <?php if($applied == 4){ ?>
                                <span class="btn editbtnsss rejected">Rejected</span>
                            <?php } else{  ?>
                                        <?php if($applied == 0){ ?>                         
                                            <a href="{{url('/client/project/reply',base64_encode($get_resource->rid))}}/<?php echo base64_encode($pid); ?>" class="btn editbtnsss">Shortlist</a> 
                                        <?php }elseif ($applied == 1){  ?>

                                            <a href="#" id="myBtn" class="btn editbtnsss">Interview</a> 
                                        <?php }elseif($applied == 2){ ?>   
                                            
                                            <a id="open" onclick="openModal" class="btn editbtnsss">Hire</a>
                                        <?php }elseif($applied == 3){  ?>    

                                            <span class="btn editbtnsss">Hired</span>
                                        <?php } ?>  
                            <?php } ?>
                               <a href="{{url('/resumes/'.$get_resource->resume)}}" class="btn btn-default">Download CV</a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session()->has('success'))
    <div class="alert alert-info" id="myDIV" role="alert">
        <strong>{{session()->get('success')}}</strong> 
        <i class="fa fa-times closeiconsss" onclick="hide()" aria-hidden="true"></i>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger" id="myDIV" role="alert">
        <strong>{{session()->get('error')}}</strong> 
        <i class="fa fa-times closeiconsss" onclick="hide()" aria-hidden="true"></i>
    </div>
    @endif
    
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="content-single">
                        <h4 class="mb-20">Why do you hire me...</h4>
                        <p>
                            {{$get_resource->bio}}
                        </p>
                                            
                        <div class="divider"></div>
                        <h4 class="mt-30 mb-30">Work Process</h4>
                        <img src="{{asset('images/work-order-management-process.svg')}}" alt="jobhub">
                    </div>
                    <div class="single-recent-jobs">
                        <h4 class="heading-border"><span>Past Experience</span></h4>
                        <div class="list-recent-jobs">
                            <?php if($get_resource_projects){
                                foreach ($get_resource_projects as $key => $get_resource_project) { ?>
                                 <div class="card-job hover-up wow animate__animated animate__fadeInUp">
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
                                        <strong class="small-heading">{{$get_resource->pay}}</strong>
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

       <!-- The Modal -->
       <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content popupinfo1">
                <span class="close closebtns">&times;</span>
                <div class="popdetails">
                    <h4>Schedule Interview</h4>  
                    <form class="contact-form-style" id="date_form" action="{{route('set_interview')}}" enctype='multipart/form-data' method="post">
                        @csrf
                            <div>
                                <div>
                                    <label for="interview">Date *</label>
                                    <input type="date" id="interview" name="interview">
                                    <p class="text-danger">@error('interview') {{$message}}@enderror</p>
                                </div>
                                <div>
                                    <label for="link">Interview Link *</label>
                                    <textarea name="interview_link" class="textinfoshow"></textarea>                                    
                                    <p class="text-danger">@error('interview_link') {{$message}}@enderror</p>
                                </div>
                            </div>

                            <input type="Hidden" name="pid" value="{{$pid}}">
                            <input type="Hidden" name="rid" value="{{$get_resource->rid}}">
                            <div class="endbtn">                                
                                <input type="submit" value="Set Interview" name="" class="submitbntss">
                            </div>
                    </form>                                       
                </div>
            </div>
        </div>

        <div class="modal" id="b">
            <div class="popupbginfo">
            <div class="header">
              <a href="#" class="cancel closeicons">X</a>
            </div>
            <div class="content pagedetails">
              <form action="{{route('hireDate')}}" id="hire_form" method="POST">
                @csrf
                <label id="first_label"><strong> Hire from :</strong></label>
                <input name="hire_from" type="date"/>
                <p class="text-danger">@error('hire_from') {{$message}}@enderror</p>

                <label id="second_label"><strong>Hire till :</strong></label>
                <input name="hire_till" type="date"/>
                <p class="text-danger">@error('hire_till') {{$message}}@enderror</p>

                <input type="Hidden" name="pid" value="{{$pid}}">
                <input type="Hidden" name="rid" value="{{$get_resource->rid}}">

                <div class="footer">
                    <button id="login" class="btn btn-default" type="submit">Hire</button>              
                </div>              
              </form>
            </div>
            </div>
            
          </div>
          

       
        <style type="text/css">
            /* The Modal (background) */
            .popupbginfo {
                width: 33%;
                background: #fff;
                margin: 0px auto;
                z-index: 9999999;
                position: relative;
                padding: 10px 25px;
                border-radius: 10px;
                }
                .closeicons {
                position: absolute;
                font-size: 11px;
                background: rgba(0, 0, 0, 0.8);
                width: 25px;
                color: #fff;
                text-align: center;
                border-radius: 50%;
                top: -10px;
                right: -10px;
                }
                .closeicons:hover {               
                color: #fff;                
                }
                .pagedetails label {
                font-size: 14px;
                font-weight: 600;
                }
                .pagedetails input {
                    background: none;
                    border-radius: 3px;
                    border: solid 1px #d5d5d5;
                    padding: 8px 14px;
                    height: auto;
                    font-size: 14px;
                    color: #666;
                    margin: 5px 0px 15px;
                    }
                    
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 99999; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 50%;
        }

        /* .modal-content.popupinfo1 {
            height: 425px;
        } */

        .popupinfo1 label {
                font-weight: 600;
                margin: 15px 0px 5px;
                }

        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        #myModal { z-index: 999; }
        </style>

        <style>
            .popup-overlay {
            /*Hides pop-up when there is no "active" class*/
            visibility: hidden;
            position: absolute;
            background: #ffffff;
            border: 3px solid #666666;
            width: 50%;
            height: 50%;
            left: 25%;
            }

            .popup-overlay.active {
            /*displays pop-up when "active" class is present*/
            visibility: visible;
            text-align: center;
            }

            .popup-content {
            /*Hides pop-up content when there is no "active" class */
            visibility: hidden;
            }

            .popup-content.active {
            /*Shows pop-up content when "active" class is present */
            visibility: visible;
            }
            .textinfoshow{min-height: 120px;}
            .endbtn{margin-top: 15px!important;}
            .popupinfo1 label {
                font-weight: 600;
                margin: 15px 0px 5px;
                }


        </style>







        

     

@endsection