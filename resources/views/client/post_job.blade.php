@extends('client.layout.head')
@section('client')


<!-- Content -->
<main class="main panelbg">     
    <section class="section-box mt-80">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">                   
                    <div class="adddeveloper-card">
                        <h4 class="pt-20">Post Project</h4>
                        <form class="contact-form-style mt-30" id="contact-form" action="{{route('add-post')}}" enctype='multipart/form-data' method="post">
                            @csrf
                            <div class="row wow animate__ animate__fadeInUp animated gray" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s;">
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Job Title *</label>
                                        <input name="job_title" placeholder="Enter Job Title" type="text">
                                        <p class="text-danger">@error('job_title') {{$message}}@enderror</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Choose Service *</label>
                                        <select class="selectbox padspace" name="primary_skills" id="primary_skills">
                                            <option value="">Select Service</option>
                                            <?php if($get_primary_skills){
                                                foreach($get_primary_skills as $key => $get_primary_skill)
                                                { ?>
                                                    <option value="<?php echo $get_primary_skill->id; ?>"><?php echo $get_primary_skill->service_name; ?></option>
                                              <?php  }
                                            }                                          
                                            ?>
                                        </select>
                                        <p class="text-danger">@error('primary_skills') {{$message}}@enderror</p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Choose Skills *</label>
                                            <select id="skills" class="js-example-basic-multiple selectbox selctheight" name="skills[]" multiple="multiple">                                               
                                            </select>
                                        <p class="text-danger">@error('skills') {{$message}}@enderror</p>
                                    </div>
                                </div>  
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Location *</label>
                                        <select class="selectbox padspace" name="location" id="">
                                            <option value="">Select Location</option>
                                            <?php if($get_locations){
                                                foreach ($get_locations as $key => $get_location) {  ?>
                                                    <option value="{{$get_location->location}}">{{$get_location->location}}</option>
                                               <?php }   } ?>                                         
                                        </select>
                                        <p class="text-danger">@error('location') {{$message}}@enderror</p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Rate Type *</label>
                                        <select class="selectbox padspace" name="rate_type" id="">
                                            <option value="Hours">Hours</option>
                                            <option value="Months">Months</option>                                            
                                        </select>
                                        <p class="text-danger">@error('rate_type') {{$message}}@enderror</p>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Budget (Rate in $) *</label>
                                        <input name="budget" placeholder="Please enter rate in $" onkeypress="return isNumberKey(event)" type="text">
                                        <p class="text-danger">@error('budget') {{$message}}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Job Type *</label>
                                        <select class="selectbox padspace" name="job_type" id="">
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>                                            
                                        </select>
                                        <p class="text-danger">@error('job_type') {{$message}}@enderror</p>
                                    </div>
                                </div> 
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Duration ( I want to hire for ) : *</label>
                                        <select class="selectbox padspace" name="duration" id="">
                                            <option value="1 - month">1 - month</option>
                                            <option value="1 - 3 month">1 - 3 month</option>
                                            <option value="3 - 6 month">3 - 6 month</option>
                                            <option value="6+ month"> 6+ month</option>
                                        </select>
                                        <p class="text-danger">@error('duration') {{$message}}@enderror</p>
                                    </div>
                                </div> 
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <label for="">Experience *</label>
                                        <select class="selectbox padspace" name="experience" id="">
                                            <option value="">Select experience</option>
                                                <?php if($get_experiences){
                                                    foreach ($get_experiences as $key => $get_experience) { ?>
                                                <option value="{{$get_experience->experience}}">{{$get_experience->experience}}</option>
                                                <?php } } ?> 
                                        </select>
                                        <p class="text-danger">@error('experience') {{$message}}@enderror</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label for="">Project Description *</label>
                                        <textarea name="project_description" id="" cols="30" rows="10"></textarea>
                                        <p class="text-danger">@error('project_description') {{$message}}@enderror</p>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12 col-md-12 text-right">
                                    <button class="submit submit-auto-width btn btn-default" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>   
                    </div>   
                </div>                
            </div>
        </div>
    </section>
    
   </main>
   <!-- End Content -->

    
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
.select2-container--default .select2-selection--multiple{min-height: 50px!important;}

</style>



    <script>   
        function isNumberKey(evt) 
         {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }



        $(document).ready(function () {
                $('#country').on('change', function () {
                    var country = $('#country').val();
                    $('#state').html('');           
                    $.ajax({
                        type:'POST',
                        url:"{{ route('get-state') }}", 
                        data:{"_token": "{{ csrf_token() }}",country:country},
                        success:function(data)
                        {    
                            $('#state').html(data)
                        }
                     });
                });
            });

    </script>


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


@endsection