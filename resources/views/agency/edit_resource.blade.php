@extends('agency.layout.head')
@section('agency')

<main class="main panelbg">        
        <section class="section-box mt-40">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                        <div>
                        	<div class="adddeveloper-card padforms topdev">
	                            <h3>Update Developer Details</h3>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                            <div class="developerimg upimg"><img src="http://toilers.co/beta/public/images/avatar2.png" alt="">
                                                <label for="file-upload" class="custom-file-upload editupload">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </label>
                                                <input id="file-upload" type="file">
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-6 col-6">
                                            <button class="submit submit-auto-width btn btn-default uploadimgs" type="submit">Upload</button>
                                        </div>
                                    </div>
                                </form>
                        	</div>
                        	<div style="clear: both;"></div>

                        	<div class="adddeveloper-card form02 padforms">
                            <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                                <div class="row wow animate__ animate__fadeInUp  animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">First Name *</label>
                                            <input name="first_name" value="{{$get_resource->first_name}}" placeholder="Enter your first name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Last Name *</label>
                                            <input name="last_name" value="{{$get_resource->last_name}}" placeholder="Enter your last name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Experience</label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">{{$get_resource->experience}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Designation</label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">Designation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Primary Skill</label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">Frontend developer</option>
                                                <option value="">Backend developer</option>
                                                <option value="">Fullstack developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Skills</label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">Skills</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Experience</label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">1 year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Upload Resume</label>
                                            <div>
                                                <label for="file-upload" class="custom-file-upload brobtns mt-0">
                                                    Browse
                                                </label>
                                                <input id="file-upload" type="file">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Currency </label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">INR</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Pay</label>
                                            <input name="" placeholder="Project Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Billing rate in </label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">Monthly</option>                                                
                                                <option value="">Hourly</option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Availability </label>
                                            <select class="selectbox" name="" id="">
                                                <option value="">Immediate</option>                                                
                                                <option value="">Within a week</option>                                                
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12 addpross">
                                        <h5>Add Project
                                        <a href="javascript:void(0);" id="addRow" class="addRow addprojectright">+ Add Project</a>
                                        </h5>
                                    </div>

                                    <div class="addproductbg">
                                    	<div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-style mb-20">
                                            <label for="">Project Name *</label>
                                            <input name="" placeholder="Project Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Time Period *</label>
                                            <input name="start_date[0]" placeholder="Start Date" type="date" max="2022-08-04">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                    	<div class="input-style mb-20">
                                            <label class="checkright" for=""> <input name="is_currentworking[]" class="smallcheck" type="checkbox"> Currently working in this Project</label>
                                            <input name="end_date[0]" placeholder="End Date" type="date" class="enddatepro" value="">
                                            <p class="text-danger"></p>
                                        </div>                                       
                                    </div>                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-style mb-20">
                                            <label for="">About Project *</label>
                                            <textarea name="project_desc[0]" id="" cols="30" rows="10" placeholder="Enter project description"></textarea>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>

                                   <div class="col-lg-12 col-md-12 text-right">
                                        <button class="submit submit-auto-width btn btn-default" type="submit">Cancel</button>
                                        <button class="submit submit-auto-width btn btn-default" type="submit">Save</button>
                                    </div>
                                    </div>                                    	
                                   </div>
                                </div>
                            </form>
                        	</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="sidebar-with-bg">
                            <div class="text-center"><img src="http://toilers.co/beta/public/images/avatar1.png" alt=""></div>
                        </div>
                        <div class="sidebar-with-bg">
                            <h5 class="font-semibold mb-10">Pro Tips</h5>
                            <p class="text-body-999 mb-2">Lorem Ipsum is simply dummy text of the printing. </p>
                            <p class="text-body-999 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <p class="text-body-999 mb-2">Lorem Ipsum is simply dummy text of the printing andindustry. </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
    </main>


@endsection