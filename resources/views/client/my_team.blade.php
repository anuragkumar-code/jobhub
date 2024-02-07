@extends('client.layout.head')
@section('client')

  <!-- Content -->
  <main class="main">
    <section class="section-box-2">
        <div class="box-head-single none-bg">
            <div class="container">
                <h4>There Are 65,866 Jobs<br>Here For you!</h4>
                <div class="row mt-15 mb-40">
                    <div class="col-lg-7 col-md-9">
                        <span class="text-mutted">Discover your next career move, freelance gig, or
                            internship</span>
                    </div>                        
                </div>                    
            </div>
        </div>
    </section>
     
    <div class="section-box mt-80">
       
        <div class="container">
            <div class="content-page">                            
                <div class="row">
                    <?php if($get_resources){
                        // echo "<pre>"; print_r($get_resources); exit;
                        foreach($get_resources as $key => $get_resource){
                        ?> 
                    <div class="col-lg-3 col-md-6">
                        <div class="card-grid-2 hover-up">                           
                            <div class="text-center card-grid-2-image-rd">
                                <span>
                                    <figure><img alt="jobhub" src="{{url('/profile/'.$get_resource->profile_img)}}"></figure>
                                </span>
                            </div>
                            <div class="card-block-info">
                                <div class="card-profile">
                                    <span><strong>{{$get_resource->first_name}} {{$get_resource->last_name}}</strong></span>
                                    <span class="text-sm"><?php
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
                                    {{-- <div class="rate-reviews-small">
                                        <span><img src="{{asset('images/star.svg')}}" alt="jobhub"></span>                                   
                                        <span><img src="{{asset('images/star.svg')}}" alt="jobhub"></span>                                   
                                        <span><img src="{{asset('images/star.svg')}}" alt="jobhub"></span>                                   
                                        <span><img src="{{asset('images/star.svg')}}" alt="jobhub"></span>                                   
                                        <span><img src="{{asset('images/star.svg')}}" alt="jobhub"></span>                                                                        
                                        <span class="ml-10 text-muted text-small">(5.0)</span>
                                    </div> --}}
                                </div>
                                <div class="employers-info d-flex align-items-center justify-content-center mt-15">
                                    <span class="d-flex align-items-center"><i class="fi-rr-clock mr-5 ml-0"></i> <?php if($get_resource->currency == 1){ echo "₹"; }elseif($get_resource->currency == 2){echo "$";} ?> {{$get_resource->pay}} / {{$get_resource->billing}}</span>
                                    <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i> {{$get_resource->designation}}</span>
                                </div>
                                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                    <div class="text-center">
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
                                    {{-- <div class="text-center mt-25 mb-5">
                                        <a href="#" class="btn btn-border btn-brand-hover">View profile</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>   
                    <?php }} ?>
                </div>               
            </div>
        </div>       
    </div>   
</main>
<!-- End Content -->

@endsection