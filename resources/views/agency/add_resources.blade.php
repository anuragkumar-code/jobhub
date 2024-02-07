@extends('agency.layout.head')
@section('agency')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Content -->
<main class="main panelbg">  
    <section class="section-box mt-80">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">
                    <div>
                        <form class="contact-form-style mt-30" id="contact-form" action="{{route('agency.developer')}}" enctype='multipart/form-data' method="post">
                            @csrf
                            <div class="adddeveloper-card">
                                <h3>Add Developer Details</h3>                           
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                            <div class="developerimg upimg"><img src="{{asset('images/avsssa_1.png')}}" id="preview_img" alt="">
                                                <label for="file-upload" class="custom-file-upload editupload">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </label>
                                                <input id="file-upload" name="profile_img" onchange="readURL(this);" type="file">
                                                
                                            </div>
                                        </div>
                                    </div>
                            
                                <div class="row wow animate__ animate__fadeInUp animated gray" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">                                
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">First Name *</label>
                                            <input name="first_name" placeholder="Enter resource first name" value="{{old('first_name')}}" type="text">
                                                                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Last Name (Optional)</label>
                                            <input name="last_name" placeholder="Enter resource last name" value="{{old('last_name')}}" type="text">
                                                                                    
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Email *</label>
                                            <input name="email" placeholder="Enter resource email" value="{{old('email')}}" type="text">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Designation *</label>
                                            <select class="selectbox new_error padspace" name="designation" id="">
                                                <option value="">Select designation</option>
                                                <?php if($get_designations){
                                                    foreach ($get_designations as $key => $get_designation) { ?>
                                                        <option value="{{$get_designation->designation}}">{{$get_designation->designation}}</option>
                                                        
                                                <?php } } ?>                                              
                                            </select>
                                                                                      
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Primary Skill *</label>
                                            <select class="selectbox new_error selctmultishow" name="primary_skills[]" id="primary_skills" multiple>                                                
                                                <?php if($get_primary_skills){
                                                    foreach($get_primary_skills as $key => $get_primary_skill)
                                                    { ?>
                                                        <option value="<?php echo $get_primary_skill->id; ?>"><?php echo $get_primary_skill->service_name; ?></option>
                                                <?php  }
                                                }                                          
                                                ?>
                                            </select>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20 aboutfill">
                                            <label for="">Skills *</label>                                            
                                                <select id="skills" class="js-example-basic-multiple selectbox new_error" name="skills[]" multiple="multiple">                                               
                                                </select>
                                                                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Experience *</label>
                                            <select class="selectbox new_error padspace" name="experience" id="">
                                                <option value="">Select experience</option>
                                                <?php if($get_experiences){
                                                    foreach ($get_experiences as $key => $get_experience) { ?>
                                                <option value="{{$get_experience->experience}}">{{$get_experience->experience}}</option>
                                                <?php } } ?> 
                                            </select> 
                                                                                    
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="file-upload-test">Upload Resume *</label>
                                            <div>                                           
                                                <input id="file-upload-test" name="resume" type="file" class="filepad"/>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Currency *</label>
                                            <select class="selectbox new_error padspace" name="currency" id="">
                                                <option value="">Select currency</option>
                                                <option value="1">INR</option>
                                                <option value="2">USD</option>                                         
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Pay *</label>
                                            <input name="pay" placeholder="Enter Pay" value="{{old('pay')}}" onkeypress="return isNumberKey(event)" type="text">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Billing rate per *</label>
                                            <select class="selectbox new_error padspace" name="billing" id="">
                                                <option value="">Select billing type</option>
                                                <option value="Month">Month</option>
                                                <option value="Hour">Hour</option>
                                            </select>
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <label for="">Availability *</label>
                                            <select class="selectbox new_error padspace" name="availability" id="">
                                                <option value="">Select availability status</option>
                                                <option value="Immediate">Immediate</option>
                                                <option value="Within a week">Within a week</option>
                                                <option value="2 week">2 week</option>
                                                <option value="3 week">3 week</option>
                                            </select>
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-style mb-20">
                                            <label for="">Why hire me...?? *</label>
                                            <textarea name="bio" cols="30" rows="10" placeholder="Describe a short synopsis about resource">{{old('bio')}}</textarea>
                                           
                                        </div>
                                    </div>                          
                                    {{-- Project --}}                               
                                    <div class="col-lg-12 col-md-12">
                                        <div class="projectdetails-heading">                                          
                                        <h5><strong> Past Projects Details *</strong><a href="javascript:void(0);" id="addRow" class="addRow">+ Add Project</a></h5>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12" id="inputFormRow">
                                        <div class="addproductbg">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <label for="">Project Name *</label>
                                                        <input name="project_name[]" value="<?php echo old('project_name') ?>" placeholder="Enter Project name" type="text">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <label for="">Time Period *</label>
                                                        <input name="start_date[]" placeholder="Start Date" type="date" max="<?php echo date("Y-m-d"); ?>">
                                                                                                              
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="input-style mb-20">
                                                        <label for=""> <input name="is_currentworking[]" class="smallcheck" type="checkbox"> Currently working in this Project</label>
                                                        <input name="end_date[]" placeholder="End Date" type="date" class="enddatepro" value="">
                                                                                                                
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-style mb-20 aboutfill">
                                                        <label for="">About Project *</label>
                                                        <textarea name="project_desc[]" id="content" cols="30" rows="10" placeholder="Enter project description"><?php echo old('project_desc'); ?></textarea>
                                                                                                             
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-style mb-20 padskill">
                                                        <label for="">Skills Used *</label>
                                                        <select id="project_skills" class="js-example-basic-multiple1 selectbox" name="project_skills[][]" multiple="multiple">                                               
                                                            <option value="">Select Skills</option>
                                                            <?php if($get_skills){
                                                                foreach($get_skills as $key => $skill)
                                                                { ?>
                                                                    <option value="<?php echo $skill->id; ?>"><?php echo $skill->skill; ?></option>
                                                            <?php  }
                                                            }                                          
                                                            ?>
                                                        </select>  
                                                                                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="newRow" class="newRow"></div>  
                                    <div class="col-lg-12 col-md-12 text-right">                                        
                                        <button class="submit submit-auto-width btn btn-default" type="submit">Add Resource</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>                                  
                   </div>
                </div>              
            </div>
        </div>
    </section>   
</main>
<!-- End Content -->

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="{{asset('js/select2.min.js')}}"></script>  
<script src="{{asset('js/ckeditor.js')}}"></script>

<script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview_img')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#project_skills').select2();
    CKEDITOR.replace( 'content' );
});

$(document).ready(function() {
    $('#skills').select2();
});   

$(document).ready(function() {
    // add row


    var x = 1; 
    $(".addRow").click(function () {
       
        x++;
       // alert(x);
        $('.newRow').append('<div class="col-lg-12 col-md-12" id="inputFormRow"><button id="removeRow" type="button" class="btn btn-danger">Remove</button><div class="addproductbg"><div class="row"><div class="col-lg-4 col-md-6"><div class="input-style mb-20"><label for="">Project Name *</label><input name="project_name[]" value="<?php echo old('project_name'); ?>" placeholder="Enter Project name" type="text"></div></div><div class="col-lg-4 col-md-6"><div class="input-style mb-20"><label for="">Time Period *</label><input name="start_date[]" placeholder="Start Date" type="date" max="<?php echo date("Y-m-d"); ?>"> </div></div><div class="col-lg-4 col-md-6"><div class="input-style mb-20"><label for=""> <input name="is_currentworking[]" class="smallcheck" type="checkbox"> Currently working in this Project</label><input name="end_date[]" placeholder="End Date" type="date" class="enddatepro"></div></div><div class="col-lg-12"><div class="input-style mb-20"><label for="">About Project *</label><textarea name="project_desc[]" id="content'+x+'" cols="30" rows="10" placeholder="Enter project description"><?php echo old('project_desc'); ?></textarea></div></div><div class="col-lg-12"><div class="input-style mb-20"><label for="">Skills Used *</label><select id="project_skills'+x+'" class="js-example-basic-multiple12'+x+' selectbox" name="project_skills['+x+'][]" multiple="multiple"><option value="">Select Skills</option><?php if($get_skills){foreach($get_skills as $key => $skill){ ?><option value="<?php echo $skill->id; ?>"><?php echo $skill->skill; ?></option><?php  }}?></select></div></div></div></div></div>');

        //alert('.js-example-basic-multiple12'+x);
         initailizeSelect2(x);

     
    CKEDITOR.replace( 'content'+x);

    });
});

function initailizeSelect2(id){
    //alert(id);
     $("#project_skills"+id).select2({
    multiple: true,
  });
}
$(document).ready(function(){
    $('.smallcheck').on('click', function(){           
       if($(this).is(':checked')){
           $('.enddatepro').attr('disabled', true);
       } else {
           $('.enddatepro').attr('disabled', false);
       }
   });
});


    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });


    $(document).ready(function(){
        $('.smallcheck').on('click', function(){           
           if($(this).is(':checked')){
               $('.enddatepro').attr('disabled', true);
           } else {
               $('.enddatepro').attr('disabled', false);
           }
       });
    });

</script>

<style>
.text-danger {
    color: red!important;
    font-size: 12px!important;
    font-weight: 700!important;
    text-align: left;
}

#test{
    display: none;
}

</style>

<style>
    .uploadbtn {
  border: none;
  background-color: #9777fa;
  color: #fff;
  border-radius: 10px;
  padding: 10px 20px;
  cursor: pointer;
}

.uploadbtn:hover {
  opacity: 0.8;
  transition: all 500ms ease;
}
/* Span Text Styling */
#custom-space {
  color: #000;
  margin-left: 2%;
  display: none;
}

.preview_holder {
  float: left;
  margin: -20px 0 0 5px;
}
#preview {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 80px;
  min-height: 80px;
  border-radius: 50%;
  text-align: center;
  overflow: hidden;
  border: 1px dotted;
}
.preview_img {
  display: none;
  width: 80px;
  height: 80px;
  object-fit: cover;
}
/*070922*/
.aboutfill {
  position: relative;
}
.aboutfill .error {
  position: absolute;
  bottom: -31px;
  left: 0px;
}
.padskill{margin-top: 15px;}

</style>

<script>
        // Grabbing Elements and Storing in Variables
    const defaultFile = document.getElementById("default-file");
    const customBtn = document.getElementById("custom-btn");
    const customSpace = document.getElementById("custom-space");
    customBtn.addEventListener("click", function () {
    defaultFile.click();
    });

    // File Upload
    defaultFile.addEventListener("change", function () {
    //  Format Selected File Text
    if (defaultFile.value) {
    customSpace.innerHTML =
    defaultFile.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1] + "";
    } else {
    customSpace.innerHTML = "No File, Selected!";
    }

    // Image Preview
    const files = defaultFile.files[0]; //files[0] - For getting first file
    //   console.log(files);

    if (files) {
    // Showing Image and Hiding "Image Preview" Text
    preview_img.style.display = "block";
    preview_text.style.display = "none";
    //Read File
    const fileReader = new FileReader();

    fileReader.addEventListener("load", function () {
    // convert image to base64 encoded string
    preview_img.setAttribute("src", this.result);
    console.log(this.result);
    });
    fileReader.readAsDataURL(files);
    }
    });
</script>

<style type="text/css">
.main-menu{padding: 0px!important; margin: 0px!important;}
</style>

<script>
    $(function() {
    
    $.validator.addMethod("regx", function(value, element, regexpr) {          
    return regexpr.test(value);
}, "Please enter a valid URL.");

    $("#contact-form").validate({


   ignore: [],
   ignore: '.hiddenclass',
        rules: {
            profile_img: {
                required: true,
                extension: "jpg|jpeg|png",
            },
            first_name: {
                required: true,
            },                          
            email: {
                 required: true,
                 email: true                
            },
            experience: {
                required: true,
            },
            designation: {
                required: true,
            },
            'primary_skills[]': {
                required: true,
            },
            'skills[]': {
                required: true,
            },
            resume: {
                required: true,
                extension: "pdf",
                
            },
            currency: {
                required: true,
            },
            bio: {
                required: true,
            },
            pay: {
                required: true,
            },
            billing: {
                required: true,
            },
            availability: {
                required: true,
            },

            'project_name[]': {
                required: true,
            },
            'start_date[]': {
                required: true,
            },
            'end_date[]': {
                required: true,
            },
            'project_desc[]': {
                required: true,
            },

          
        },

        messages: {
            profile_img: {
                required: "Please upload profile image.",
                extension: "Please upload file in these format only (jpg, jpeg or png)."
            },
            first_name: {
                required: "First name is required.",
            },                          
            email: {
                 required: "Email is required.",
                 email: "Please enter valid email.",              
            },
            experience: {
                required: "Please select experience of developer.",
            },
            designation: {
                required: "Please select designation of developer.",
            },
            'primary_skills[]': {
                required: "Please select primary skill of developer.",
            },
            'skills[]': {
                required: "Please select atleast one skill of developer.",
            },
            resume: {
                required: "Please upload updated resume of developer.",                
                extension:"Select pdf format only",
            },
            currency: {
                required: "Please select currency.",
            },
            bio: {
                required: "Please add bio.",
            },
            pay: {
                required: "Please enter pay.",
            },
            billing: {
                required: "Please select billing rate.'",
            },
            availability: {
                required: "Please select availability.",
            },

            'project_name[]': {
                required: "Please enter project name.",
            },
            'start_date[]': {
                required: "Please choose project start date.",
            },
            'end_date[]': {
                required: "Please choose project end date.",
            },
            'project_desc[]': {
                required: "Please enter project description",
            },

         

        },
        submitHandler: function(form) {
         
            form.submit();
        }
    });
});
</script>

@endsection
