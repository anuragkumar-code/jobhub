@extends('agency.layout.head')
@section('agency')

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
                            <span class="post-time text-sm"><i class="fi-rr-clock"></i> <?php echo date('d - M - Y',strtotime($get_project_detail->pdate));?></span>
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
                                <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Budget</span>
                                    <strong class="small-heading">${{$get_project_detail->budget}}</strong>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex mt-sm-15">
                                <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Location</span>
                                    <strong class="small-heading">{{$get_project_detail->location}}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-md-4 d-flex">
                                <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Date posted</span>
                                    <strong class="small-heading">{{date('d-M-Y',strtotime($get_project_detail->pdate))}}</strong>
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
                                    <strong class="small-heading">Designer</strong>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <div class="content-single">
                        <h5>Project Description</h5>
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
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        </div>
                        <div class="text-start mt-20">
                            <a href="#" class="btn btn-default mr-10" id="myBtn">Apply now</a>
                            {{-- <a href="#" class="btn btn-border">Save job</a> --}}
                        </div>                       
                        
                       
                    </div>

                    <div class="sidebar-shadow">
                        <div class="block-tags">
                            <span class="btn btn-tags-sm mb-10 mr-5">Figma</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Adobe XD</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">PSD</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">HTML 5</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Css 3</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Javascript</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Jquery</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">NodeJS</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">MongoDb</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">SEO expert</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Gimp</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">PSD</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Photo editing</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">Sketch</span>
                                <span class="btn btn-tags-sm mb-10 mr-5">jam</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

       <!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content popupinfo">
<span class="close">&times;</span>
<div class="popdetails">
    <h4>Resources available</h4>    
    <div class="popinfos">
        <form class="contact-form-style mt-30" id="contact-form" action="{{route('job-replied')}}" enctype='multipart/form-data' method="post">
        @csrf
        <?php
        if($get_resourcs) {
         foreach($get_resourcs as $get_resourc){ ?>
        <div class="radio-toolbar radiso">
            <input type="checkbox" class="check_skills" data-id="{{$get_resourc->id}}" id="radio5_{{$get_resourc->id}}" name="service[]" value="1">

            <label for="radio5_{{$get_resourc->id}}">
                <div class="logonchck"><img src="{{url('/profile/'.$get_resourc->profile_img)}}" border="0" alt="" /></div>
                <div class="rightchck">
                    <?php $firstname =  $get_resourc->first_name.' '.$get_resourc->last_name; ?>
                    <h3>{{ $firstname }}</h3>        
                    <div class="silltxt">
                        <?php if($get_resourc->skills!='')
                        { 
                            $skills = '';
                            $all_skills = explode(',',$get_resourc->skills);                                           
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
            </label>
            <input type="Hidden" name="pid" value="{{$get_project_detail->pid}}">
            <input type="Hidden" name="client_id" value="{{$get_project_detail->client_id}}">
            <input type="Hidden" name="rid[]" value="{{$get_resourc->id}}">
            <input type="Hidden" name="agency_id" value="{{$get_resourc->agency_id}}">
            <input type="Hidden" name="first_name[]" value="{{$get_resourc->first_name}}">
            <input type="Hidden" name="last_name[]" value="{{$get_resourc->last_name}}">
            <input type="Hidden" name="status[]" value="{{$get_resourc->status}}">
            <input type="Hidden" name="designation[]" value="{{$get_resourc->designation}}">
            <input type="Hidden" name="email[]" value="{{$get_resourc->email}}">
            <input type="Hidden" name="experience[]" value="{{$get_resourc->experience}}">
            <input type="Hidden" name="primary_skills[]" value="{{$get_resourc->primary_skills}}">
            <input type="Hidden" name="bio[]" value="{{$get_resourc->bio}}">
            <input type="Hidden" name="profile_img[]" value="{{$get_resourc->profile_img}}">
            <input type="Hidden" name="pay[]" value="{{$get_resourc->pay}}">
            <input type="Hidden" name="resume[]" value="{{$get_resourc->resume}}">
            <input type="Hidden" name="currency[]" value="{{$get_resourc->currency}}">
            <input type="Hidden" name="availability[]" value="{{$get_resourc->availability}}">
        </div>
        <?php } } ?>
        <div class="endbtn">
        <input type="button" value="Cancel" name="" class="submitbntss">
        <input type="submit" value="Submit" name="" class="submitbntss">
    </div>
    </form>
</div>
    
</div>
</div>
</div>
   
</main>
<!-- End Content -->
<style type="text/css">
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
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

<script type="text/javascript">
    $(document).ready(function(){
        $('.check_skills').click(function(){
            let dataid = $(this).attr(data-id);

            alert(dataid);
        });
    });
</script>



@endsection