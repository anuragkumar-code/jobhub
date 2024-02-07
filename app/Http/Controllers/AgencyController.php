<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AgencyController extends Controller
{
    //
    public function viewMyProfile()
    {
        $get_agency_details = DB::table('users')->where('users.id', Auth::id())
            ->join('agencies', 'users.id', '=', 'agencies.user_id')->get();

        $countries = DB::table('countries')->get();

        return view('agency/my_profile', compact('get_agency_details','countries'));
    }

    public function billings(){

        $get_resources = DB::table('client_resources')->join('resources', 'client_resources.resource_id', '=', 'resources.id')->where('client_resources.agency_id', Auth::id())->where('client_resources.applied', 3)->groupBy('resource_id')->get();
 

        return view ('agency/billings',compact('get_resources'));
    }

    public function resources()
    {
        $get_resources = DB::table('resources')->where('agency_id', Auth::id())->where('status', 1)->get();
        $get_available_resources = DB::table('resources')->where('agency_id', Auth::id())->where('status', 1)->where('is_available', 1)->get();
        $get_unavailable_resources = DB::table('resources')->where('agency_id', Auth::id())->where('status', 1)->where('is_available', 2)->get();

        $get_resources_count = DB::table('resources')->where('agency_id', Auth::id())->where('status', 1)->get()->count();
        $get_available_resources_count = DB::table('resources')->where('agency_id', Auth::id())->where('status', 1)->where('is_available', 1)->get()->count();
        $get_unavailable_resources_count = DB::table('resources')->where('agency_id', Auth::id())->where('status', 1)->where('is_available', 2)->get()->count();

        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();
        

        return view('agency/resources', compact('get_resources', 'get_available_resources', 'get_unavailable_resources', 'get_resources_count', 'get_available_resources_count', 'get_unavailable_resources_count', 'get_skills', 'get_primary_skills'));
    }

    public function resourceDetails($id){
        $id = base64_decode($id);
        // echo $id;
        $get_resource = DB::table('resources')->where('status', 1)->where('id', $id)->first();
        $get_resource_projects = DB::table('resource_projects')->where('resource_id', $id)->get();

        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        // echo "<pre>";
        // print_r($get_resource);
        // exit;

        return view('agency/resource_details',compact('get_resource','get_resource_projects','get_primary_skills','get_skills'));
    }

    public function resource()
    {
       
        $get_primary_skills = DB::table('services')->get();
        $get_skills = DB::table('skills')->get();
        
        $get_experiences = DB::table('experiences')->where('status', 1)->get();
        $get_designations = DB::table('designations')->where('status', 1)->get();
        
        return view('agency/add_resources', compact('get_primary_skills', 'get_skills','get_experiences','get_designations'));
    }

    public function getSecondarySkills(Request $request)
    {
        $id = array();
        $id = $request->primary_skills;
        //$all_ids = explode(',',$id);

        $get_secondary_skills = DB::table('skills')->whereIn('service_id', $id)->get();
        $html = '<option value="">Select Skills</option>';

        foreach ($get_secondary_skills as $skills) {
            $html .= '<option value=' . $skills->id . '>' . $skills->skill . '</option>';
        }
        echo $html;
    }


    public function addDeveloper(Request $request)
    {
        // echo "hi"; exit;
        

        $project_name = $start_date = $end_date = $project_desc = $is_currentworking = array();
       
        $agency_id = Auth::id();
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $designation = $request->designation;
        $primary_skills = '';
        $primary_skills_array = $request->primary_skills;
        if (!empty($primary_skills_array)) {
            $primary_skills = implode(',', $primary_skills_array);
        }

        $skills = '';
        $skills_array = $request->skills;
        if (!empty($skills_array)) {
            $skills = implode(',', $skills_array);
        }
        // echo $skills; exit;

        $experience = $request->experience;

        $currency = $request->currency;
        $pay = $request->pay;
        $billing = $request->billing;
        $availability = $request->availability;
        $bio = $request->bio;

        $project_name = $request->project_name;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $project_desc = $request->project_desc;
        $is_currentworking = $request->is_currentworking;

        $project_skills = '';
        

        $img=$resume='aa';
        // echo "<pre>"; print_r($_FILES); 

        // echo "<pre>";
        // print_r(request()->all());
        // exit;

        if($request->hasFile('profile_img'))
        {
            $profile_img = $request->file('profile_img');
            $img = time() . '.' . $profile_img->getClientOriginalExtension();

            $destinationPath = public_path('/profile');
            $profile_img->move($destinationPath, $img);
        }
        // echo $img;exit;
        
        if($request->hasFile('resume'))
        {
            $resumes = $request->file('resume');
            $resume = time() . '.' . $resumes->getClientOriginalExtension();
            $destinationPath = public_path('/resumes');
            $resumes->move($destinationPath, $resume);
        }



        DB::table('resources')->insert([
            'agency_id' => $agency_id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'primary_skills' => $primary_skills,
            'skills' => $skills,
            'experience' => $experience,
            'currency' => $currency,
            'pay' => $pay,
            'designation' => $designation,
            'profile_img' => $img,
            'resume' => $resume,
            'billing' => $billing,
            'availability' => $availability,
            'bio' => $bio,

            'is_available' => 1,
            'status' => 1,
            'updated_at' => NOW(),
            'created_at' => NOW()
        ]);

        $resource_id = DB::getPdo()->lastInsertId();

        

        if($project_name)
        {
            foreach ($project_name as $key => $projectname) 
            {
                $project_skills_array = $request->project_skills[$key];
            if (!empty($project_skills_array)) {
                $project_skills = implode(',', $project_skills_array);
            }
                DB::table('resource_projects')->insert([
                    'resource_id' => $resource_id,
                    'project_name' => $projectname,
                    'start_date' => $start_date[$key],
                    'end_date' => $end_date[$key],
                    'project_desc' => $project_desc[$key],
                    'skills' => $project_skills,
                    'is_currentworking' =>   '1',
                    'updated_at' => NOW(),
                    'created_at' => NOW()


                ]);
            }
        }

        return redirect('agency/resources')->with('success', 'New resource added sucessfully.');
    }

    public function projects()
    {
        $min_value = $max_value = 0;
        $experiences = array(0=>'2 years',1=>'3 - 5 years', 2=>'5 - 8 years',3=>'8+ years');
        // New Login Logic//
        $get_profile_details = DB::table('agencies')->where('user_id', Auth::id())->first();
        // echo "<pre>"; print_r($get_profile_details);exit;
        
        $pskill = $get_profile_details->primary_skills;
        
        // if($pskill == 0){echo "success";}else{echo "error";} exit;
        
        $get_agency_details = DB::table('users')->where('users.id', Auth::id())
            ->join('agencies', 'users.id', '=', 'agencies.user_id')->get();

        $countries = DB::table('countries')->get();
        
        // --------------- //
        
        
        $get_resources_count = DB::table('resources')->where('agency_id', Auth::id())->get()->count();
        $get_resources_count = "3";
        $get_agency_detail_skills = DB::table('resources')->where('agency_id', Auth::id())->pluck('primary_skills')->toArray();
        $projects = DB::table('client_resources')->where('agency_id', Auth::id())->groupBy('project_id')->pluck('project_id')->toArray();

        $get_agency_detail = array('0'=>0);
        if($get_agency_detail_skills)
        {
            foreach($get_agency_detail_skills as $key => $skills_data)
            {
                if($skills_data!='')
                {
                    if(count(explode(',',$skills_data))>1)
                    {
                        $resource_skills_array = explode(',',$skills_data);
                        foreach($resource_skills_array as $skills_key => $primary_skills_data)
                        {
                            $get_agency_detail[$primary_skills_data] = $primary_skills_data; 
                        }
                    }
                    else
                    {
                        $get_agency_detail[$skills_data] = $skills_data;
                    }
                }
            }
        }

        
        $get_projects = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->where('projects.status', 0)->where('projects.is_active', 1)->whereIn('primary_skills',$get_agency_detail)->whereNotIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->orderBy('projects.id','DESC')->get();

        $get_projects_count = DB::table('projects')->whereIn('primary_skills', $get_agency_detail)->whereNotIn('id', $projects)->get()->count();

        $appl_projects_count = DB::table('projects')->whereIn('id', $projects)->count();

        $appl_projects = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->whereIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->orderBy('projects.id','DESC')->get();
        
        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        $get_locations = DB::table('locations')->where('status', 1)->get();
        
         
        if($pskill == 0){
            
            return view('agency/my_profile', compact('get_agency_details','countries'));
        } else{

        return view('agency/projects', compact('get_locations','get_resources_count', 'get_projects','get_primary_skills','get_skills','get_projects_count','appl_projects_count','appl_projects','experiences','min_value','max_value'));
        }
    }

    public function addProfile(Request $request)
    {
        $agency_id = Auth::id();
        $images = array();
        $all_images = '';
        // echo "<pre>"; print_r($_FILES); exit;
        $office_photo = $request->office_photo;

        /*if ($office_photo) {*/
        if($request->hasFile('office_photo')){
            foreach ($office_photo as $key => $data) {
                $img = time() . $key . '.' . $data->getClientOriginalExtension();
                $destinationPath = public_path('/office_photo');
                $data->move($destinationPath, $img);
                $images[] = $img;
            }
        }


        if ($images) {  
            $all_images = implode(',', $images);
        }
        else
        {

            $all_images = $request->old_office_image;
        }
        

        $agency_id = Auth::id();
        $first_name = $request->first_name;
        $last_name = $request->last_name;

        $country = $request->country;
        $company_name = $request->company_name;
        $company_website = $request->company_website;
        $establishment_year = $request->establishment_year;
        $about_company = $request->about_company;

        DB::table('agencies')
            ->where('user_id', $agency_id)
            ->update([
                'company_name' => $company_name,
                'company_website' => $company_website,
                'establishment_year' => $establishment_year,
                'country' => $country,
                'about_company' => $about_company,
                'office_images' => $all_images,

            ]);

        DB::table('users')
            ->where('id', $agency_id)
            ->update([
                'first_name' => $first_name,
                'last_name' => $last_name,

            ]);



        return redirect('agency/services');
    }

    public function addServices(Request $request)
    {

        request()->validate(
            [
                'service' => 'required',
                'skill' => 'required'
            ],
            [
                'service.required' => 'Please select atleast one service.',
                'skill.required' => 'Please select atleast one skill.'
            ]
        );

        $service = $request->service;
        if(is_array($service))
        {
            $service = implode(',', $service);
    
        }

        $skill = $request->skill;
        if(is_array($skill))
        {
            $skill = implode(',', $skill);
        }

        // echo $service; echo "<br>"; echo $skill; exit;

        DB::table('agencies')->where('user_id', Auth::id())->update([
            'primary_skills' => $service,
            'skills' => $skill,
        ]);

        return redirect('agency/projects')->with('success', 'Your profile had been updated.');
    }

    public function addProfileImg(Request $request)
    {
        request()->validate(
            [
                'avatar' => 'required',
            ],
            [
                'avatar.required' => 'Please choose image first.'
            ]
        );

        $profile_img = $request->file('avatar');
        //    echo $profile_img; exit;

        $img = time() . '.' . $profile_img->getClientOriginalExtension();

        // echo $img; exit;
        $destinationPath = public_path('/profile');
        $profile_img->move($destinationPath, $img);

        DB::table('agencies')->where('user_id', Auth::id())->update([
            'company_logo' => $img,
        ]);

        return back()->with('success', 'Profile photo uploaded.');
    }

    public function viewServices()
    {
        $agency_array = array('0'=>0);
        $services_data_array = array();
        $agency_id = Auth::id();
        $agency_data = DB::table('agencies')->where('user_id',$agency_id)->first();
        if($agency_data->primary_skills!='')
        {
            $agency_array = explode(',', $agency_data->primary_skills);
        }
        $get_skills =  DB::table('skills')->select('skills.id as skills_id', 'skills.*', 'services.service_name')->join('services', 'skills.service_id', '=', 'services.id')->whereIn('service_id', $agency_array)->where('skills.status',1)->get();
        $get_services = DB::table('services')->where('status', 1)->get();

        if ($get_skills) {
            foreach ($get_skills as $key => $value) {
                $services_data_array[$value->service_id][] = $value;
            }
        }

      

        return view('agency/services', compact('get_services','agency_data','services_data_array'));
    }

    public function getTechnologies(Request $request)
    {
        $services_data_array = $skills_array = array();
        $agency_id = Auth::id();
        $agency_data = DB::table('agencies')->where('user_id',$agency_id)->first();

        if($agency_data->skills!='')
        {
            $skills_array = explode(',', $agency_data->skills);
        }
        $id = $request->service_id;
        $services_array = explode(',', $id);
        $get_skills =  DB::table('skills')->select('skills.id as skills_id', 'skills.*', 'services.service_name')->join('services', 'skills.service_id', '=', 'services.id')->whereIn('service_id', $services_array)->where('skills.status',1)->get();


        if ($get_skills) {
            foreach ($get_skills as $key => $value) {
                $services_data_array[$value->service_id][] = $value;
            }
        }


        $message = "";

        if ($services_data_array) {
            foreach ($services_data_array as $service_key => $service_value) {
                $message .= '<div class="col-md-12 mt-30"><div class="technology-prefer-row">
                                                <p>What kind of technology do you prefer for ' . $service_value[0]->service_name . '</p>
                                                <div class="check-toolbar">';

                foreach ($service_value as $skills_key => $skills_value) {
                     $checked = '';
                    if (in_array($skills_value->skills_id, $skills_array)){   
                    
                        $checked = 'checked';
                    } 

                    $message .= '<span>
                                    <input type="checkbox" id="check' . $skills_value->skills_id . '" name="skill[]" value="' . $skills_value->skills_id . '" '.$checked.' >
                                    <label for="check' . $skills_value->skills_id . '">' . $skills_value->skill . '</label> 
                                </span>';
                }
                $message .= '</div></div></div>';
            }
        }

        echo $message;

        exit;
    }

    public function jobDetails(Request $request, $id){

    $pid = base64_decode($id);
        
    $get_project_detail = DB::table('projects')->select('projects.*','projects.id as pid', 'projects.created_at as pdate' ,'clients.id as cid', 'clients.*')->where('projects.id', $pid)->join('clients', 'projects.client_id', '=', 'clients.user_id')->first();
   
    $agency_id = Auth::id();

    $primarySkill = $get_project_detail->primary_skills;

    $get_resourcs = DB::table('resources')->where('status', 1)->where('agency_id', $agency_id)->whereRaw("FIND_IN_SET('$primarySkill',primary_skills)")->where('is_available', 1)->get();
   
    $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();    

    return view('agency/project_details',compact('get_project_detail','get_resourcs','get_skills'));
        

    }


    public function addReply(Request $request)
    {

        // echo "<pre>"; print_r($request->all()); exit;

        $pid = $request->pid;
        $client_id = $request->client_id;
        $agency_id = $request->agency_id;
        $rid = $request->rid;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $status = $request->status;
        $email = $request->email;
        $designation = $request->designation;
        $experience = $request->experience;
        $primary_skills = $request->primary_skills;
        $bio = $request->bio;
        $profile_img = $request->profile_img;
        $pay = $request->pay;
        $resume = $request->resume;
        $currency = $request->currency;
        $designation = $request->designation;
        $availability = $request->availability;

        // echo "<pre>"; print_r($rid); exit;

        if($rid)
        {
            foreach ($rid as $key => $ri) {
                   //echo $[$key];            
                DB::table('client_resources')->insert([
                    'project_id' => $pid,
                    'client_id' => $client_id,
                    'agency_id' => $agency_id,
                    'resource_id' => $ri,
                    'first_name' => $first_name[$key],
                    'last_name' => $last_name[$key],
                    'status' => $status[$key],
                    'designation' => $designation[$key],
                    'email' => $email[$key],
                    'primary_skills' => $primary_skills[$key],
                    'experience' => $experience[$key],
                    'currency' => $currency[$key],
                    'pay' => $pay[$key],
                    'designation' => $designation[$key],
                    'profile_img' => $profile_img[$key],
                    'resume' => $resume[$key],
                    'bio' => $bio[$key],
                    'availability' => $availability[$key],
                    'updated_at' => NOW(),
                    'created_at' => NOW()
                ]);
               
            }
            
        }
     
        return redirect('agency/projects')->with('Success', 'Succesfully Applied for Project.');
    }

    // public function getResource($id){
    //     $id = base64_decode($id);      

    //     $get_resource = DB::table('resources')->where('resources.id', $id)->join('resource_projects', 'resources.id', '=', 'resource_projects.resource_id')->first();
    
    //     return view('agency/edit_resource',compact('get_resource'));
    // }

    // public function updateResource(Request $request, $id){

    //     request()->validate(
    //             [
    //                 'profile_img' => 'required|mimes:png,jpg,jpeg',
    //                 'first_name' => 'required|max:30|regex:/^[\pL\s\-]+$/u',       
    //                 'email' => 'required|email|unique:resources|regex:/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',               
    //                 'experience' => 'required',
    //                 'designation' => 'required',
    //                 'primary_skills' => 'required',
    //                 'skills' => 'required',
    //                 'resume' => 'required|mimes:png,jpg,jpeg,doc,docx,txt,pdf|max:2048',
    //                 'currency' => 'required',
    //                 'pay' => 'required',
    //                 'billing' => 'required',
    //                 'availability' => 'required',
    
    //                 'project_name' => 'required',
    //                 'start_date' => 'required',
    //                 'end_date' => 'required',
    //                 'project_desc' => 'required',
    //                 'project_skills' => 'required',
    
    
    //             ],
    //             [   
    //                 'profile_img.required' => 'Please upload profile image.',
    //                 'first_name.required' => 'First name is required.',                
    //                 'email.required' => 'Email is required.',               
    
    //                 'designation.required' => 'Please select designation of developer.',
    //                 'primary_skills.required' => 'Please select primary skill of developer.',
    //                 'skills.required' => 'Please select designation of developer.',
    //                 'experience.required' => 'Please select experience of developer.', 
    //                 'resume.required' => 'Please upload updated resume of developer.',
    //                 'currency.required' => 'Please select currency.',
    //                 'pay.required' => 'Please enter salary.',
    //                 'billing.required' => 'Please select billing rate.',
    //                 'availability.required' => 'Please select availability.',
    
    //                 'project_name.required' => 'Please enter project name.',
    //                 'start_date.required' => 'Please enter start date.',
    //                 'end_date.required' => 'Please enter end date.',
    //                 'project_desc.required' => 'Please enter description of project.',
    //                 'project_skills.required' => 'Please select skills used in project.',
    
    
    //             ]
    //         );

    //     $id = $request->id;

    //     // $save = DB::table('resources')->where('id', $id)

    // }

    public function getStates(Request $request){
        $id = $request->country;
        $get_states = DB::table('states')->where('country_id', $id)->get();
        $html = '<option value="">Select State</option>';

        foreach ($get_states as $state) {
            $html .= '<option value=' . $state->name . '>' . $state->name . '</option>';
        }
        echo $html;
    }


    public function AppliedJobDetails($id){
        $agency_id = Auth::id();
        $id = base64_decode($id);

        $get_project_detail = DB::table('projects')->select('projects.id as pid','projects.created_at as pdate', 'projects.*','clients.id as cid', 'clients.*')->where('projects.id', $id)->join('clients', 'projects.client_id', '=', 'clients.user_id')->first();
        // echo "<pre>"; print_r($get_project_detail); exit;
        $get_primary_skills = DB::table('services')->get();

        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        $get_resources = DB::table('client_resources')->join('resources', 'client_resources.resource_id', '=', 'resources.id')->where(['project_id'=>$id, 'client_resources.agency_id'=>$agency_id])->get();
        // echo "<pre>"; print_r($get_resources); exit;
        return view('agency/applied_project_details',compact('get_project_detail','get_skills','get_resources','get_primary_skills'));

    }

    public function projectFilter(Request $request){

        $experiences = array(0=>'2 years',1=>'3 - 5 years', 2=>'5 - 8 years',3=>'8+ years');    

        

        if(isset($request->experience_level))
        {
            $experiences = $request->experience_level;
        }
        $max_value = $min_value =  0;
        if(isset($request->max_value))
        {
            $max_value = $request->max_value;
        }
        if(isset($request->min_value))
        {
            $min_value = $request->min_value;
        }

        
        $location = $request->location;
        //$experience = $request->experience;
        // $budget = $request->budget;

        $get_resources_count = DB::table('resources')->where('agency_id', Auth::id())->get()->count();
        $get_agency_detail_skills = DB::table('resources')->where('agency_id', Auth::id())->pluck('primary_skills')->toArray();
        $projects = DB::table('client_resources')->where('agency_id', Auth::id())->groupBy('project_id')->pluck('project_id')->toArray();

        $get_locations = DB::table('locations')->where('status', 1)->get();

        $get_agency_detail = array('0'=>0);
        if($get_agency_detail_skills)
        {
            foreach($get_agency_detail_skills as $key => $skills_data)
            {
                if($skills_data!='')
                {
                    if(count(explode(',',$skills_data))>1)
                    {
                        $resource_skills_array = explode(',',$skills_data);
                        foreach($resource_skills_array as $skills_key => $primary_skills_data)
                        {
                            $get_agency_detail[$primary_skills_data] = $primary_skills_data; 
                        }
                    }
                    else
                    {
                        $get_agency_detail[$skills_data] = $skills_data;
                    }
                }
            }
        }
        
        
        
        // $get_projects = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->where('projects.status', 0)->where('projects.is_active', 1)->whereIn('primary_skills',$get_agency_detail)->whereIn('experience', $experience)->whereNotIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->orderBy('projects.id','DESC')->paginate(10);

        if($max_value==0)
        {
            $get_projects = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->where('projects.status', 0)->where('projects.is_active', 1)->whereIn('primary_skills',$get_agency_detail)->whereIn('experience', $experiences)->whereNotIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->orderBy('projects.id','DESC')->paginate(10);    

      
            $get_projects_count = DB::table('projects')->whereIn('primary_skills', $get_agency_detail)->whereIn('experience', $experiences)->whereNotIn('id', $projects)->get()->count();

            $appl_projects_count = DB::table('projects')->whereIn('experience', $experiences)->whereIn('id', $projects)->count();

            $appl_projects = DB::table('projects')->whereIn('experience', $experiences)->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->whereIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->get();
        }
        else
        {
            $get_projects = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->where('projects.status', 0)->where('projects.budget','>=', $min_value)->where('projects.budget','<=', $max_value)->where('projects.is_active', 1)->whereIn('primary_skills',$get_agency_detail)->whereIn('experience', $experiences)->whereNotIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->orderBy('projects.id','DESC')->paginate(10);    

      
            $get_projects_count = DB::table('projects')->where('projects.budget','>=', $min_value)->where('projects.budget','<=', $max_value)->whereIn('primary_skills', $get_agency_detail)->whereIn('experience', $experiences)->whereNotIn('id', $projects)->get()->count();

            $appl_projects_count = DB::table('projects')->where('projects.budget','>=', $min_value)->where('projects.budget','<=', $max_value)->whereIn('experience', $experiences)->whereIn('id', $projects)->count();

            $appl_projects = DB::table('projects')->where('projects.budget','>=', $min_value)->where('projects.budget','<=', $max_value)->whereIn('experience', $experiences)->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->whereIn('projects.id', $projects)->join('clients', 'projects.client_id', '=', 'clients.user_id')->get();
        }


        

        
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        return view('agency/projects', compact('get_locations','get_resources_count', 'get_projects','get_skills','get_projects_count','appl_projects_count','appl_projects','experiences','min_value','max_value'));

    }

    public function agency_billings_resource(Request $request){

        $id = $request->resource_id;

        $get_details = DB::table('billings')->select('billings.*','billings.id as bid','client_resources.*','projects.job_title')->join('client_resources', 'billings.client_resources_id', '=', 'client_resources.id')->join('projects', 'client_resources.project_id', '=', 'projects.id')->where('billings.agency_id', Auth::id())->where('billings.resource_id', $id)->get();
        
        return view('agency/ajax_billing', compact('get_details'));
    
        die();
    
    }
}