@extends('agency.layout.head')
@section('agency')

    <!-- Content -->
    <main class="main panelbg">        
        <section class="section-box mt-80">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">
                        <div> 
                            <h4>Select Services & Technologies</h4>
                            <div class="services-radiogrp mt-30 mb-30">
                                <p>Opt for services and technologies that you excels in*</p>
                                <p class="text-danger">@error('service') {{$message}}@enderror</p>
                                <div class="radio-toolbar">
                                    <form class="contact-form-style mt-30" id="contact-form" action="{{route('add-services')}}" enctype='multipart/form-data' method="post">
                                        @csrf
                                        <div class="row">
                                            <?php
                                            
                                            $agency_array = array();
                                            if($agency_data->primary_skills!='')
                                            {
                                                $agency_array = explode(',', $agency_data->primary_skills);
                                            }


                                             if($get_services){
                                                foreach ($get_services as $key => $get_service) {
                                                    $checked = '';
                                                if (in_array($get_service->id, $agency_array)){   
                                                
                                                    $checked = 'checked';
                                                } ?>
                                               
                                                    <div class="col-md-3">
                                                        <input type="checkbox" class="check_skills" id="<?php echo $get_service->for_id; ?>" {{$checked}} name="service[]" value="<?php echo $get_service->id; ?>">
                                                        <label for="<?php echo $get_service->for_id; ?>"><i class="fa fa-<?php echo $get_service->icon; ?>" aria-hidden="true"></i> <?php echo $get_service->service_name; ?></label>                                                  
                                                    </div>

                                                    <?php
                                                }
                                            } ?> 
                                        </div>

                                        <div id="response">
                                            <?php 

                                            $skills_array = array();
                                            if($agency_data->skills!='')
                                            {
                                                $skills_array = explode(',', $agency_data->skills);
                                            }
                                            if ($services_data_array) {
            foreach ($services_data_array as $service_key => $service_value) { ?>
                <div class="col-md-12 mt-30"><div class="technology-prefer-row">
                                                <p>What kind of technology do you prefer for {{$service_value[0]->service_name}}</p>
                                                <div class="check-toolbar">
                                                    <?php
                                                        foreach ($service_value as $skills_key => $skills_value) 
                                                        {


                                                $checked = '';
                                                if (in_array($skills_value->skills_id, $skills_array)){   
                                                
                                                    $checked = 'checked';
                                                } 

                                                         ?>
                                <span>
                                    <input type="checkbox" id="check{{$skills_value->skills_id}}" name="skill[]" value="{{$skills_value->skills_id}}" {{$checked}}>
                                    <label for="check{{$skills_value->skills_id}}'">{{$skills_value->skill}}</label> 
                                </span>
                 <?php  } ?>
                </div>
                                     </div>
                                     </div>
                                     <?php
                                                }
                                            } ?>

                                        </div>
                                        <p class="text-danger">@error('skill') {{$message}}@enderror</p>

                                        
                                        <div class="col-lg-12 col-md-12 text-right mt-30">                                            
                                            <button class="submit submit-auto-width btn btn-default" type="submit">Update Services</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>        
    </main>
    <!-- End Content -->
@endsection