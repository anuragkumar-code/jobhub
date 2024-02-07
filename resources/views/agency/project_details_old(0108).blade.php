@extends('agency.layout.head')
@section('agency')

 <!-- Content -->
 <main class="main panelbg mt-50 pb-50 d-flex">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="singleproject-details mt-0">
                    <h4 class="mt-20">{{$get_project_detail->job_title}} <span class="btn-tags-sm">Contract Hiring</span></h4>
                    <p class="freshlead"><i class="fa fa-clock-o" aria-hidden="true"></i> <span>Fresh lead</span> ID: SS-BH-R3-1525</p>

                    <div class="singleproject-topbg">
                        <ul>
                            <li>
                                <h6>Min $1500</h6>
                                <p>Monthly/Resource</p>
                            </li>
                            <li>
                                <h6>{{$get_project_detail->duration}} Days</h6>
                                <p><i class="fa fa-calendar-o" aria-hidden="true"></i> Duration</p>
                            </li>
                            <li>
                                <h6>Immediately</h6>
                                <p><i class="fa fa-calendar-o" aria-hidden="true"></i> Tentative Start Date</p>
                            </li>
                        </ul>
                    </div>

                    <div class="singleproject-requird">
                        <h5>Project Description</h5>
                        <p>{{$get_project_detail->project_description}}</p>
                    </div>

                    <div class="singleproject-requird">
                        <h5 class="m-0">Skills Required for Project</h5>

                        <h6>Web Development</h6>
                        <span class="btn-tags-sm mb-10 mr-5">Bootstrap</span>
                        <span class="btn-tags-sm mb-10 mr-5">Laravel</span>
                        <span class="btn-tags-sm mb-10 mr-5">MySQL</span>
                        <span class="btn-tags-sm mb-10 mr-5">PHP</span>

                    </div>

                </div>                
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                <div class="sidebar-shadow">
                    <h5 class="font-bold">About Client</h5>
                    <div class="sidebar-list-job mt-10">
                        <ul>
                            <li>
                                <div class="sidebar-text-info">
                                    <strong class="small-heading"><img src="{{url('/profile/'.$get_project_detail->company_logo)}}" width="100" style="border-radius: 50%;" alt=""></strong>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Client Name</span>
                                    <strong class="small-heading">{{$get_project_detail->company_name}}</strong>
                                </div>
                            </li>

                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Location</span>
                                    <strong class="small-heading">Dallas, Texas<br>Remote Friendly</strong>
                                </div> 
                            </li>
                            
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Client Enrolled</span>
                                    <strong class="small-heading">{{$get_project_detail->establishment_year}}</strong>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                <div class="sidebar-text-info">
                                    <span class="text-description">Client Website</span>
                                    <strong class="small-heading">{{$get_project_detail->company_website}}</strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
<!-- End Content -->


@endsection