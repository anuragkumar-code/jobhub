<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    //
    public function viewMyProfile(){
 
        $get_client_details = DB::table('clients')->where('user_id', Auth::id())->first();

        $countries = DB::table('countries')->get();
 
        return view('client/my_profile',compact('get_client_details','countries'));
    }

    public function billings(){

        $get_resources = DB::table('client_resources')->join('resources', 'client_resources.resource_id', '=', 'resources.id')->where('client_id', Auth::id())->where('applied', 3)->groupBy('resource_id')->get();
 
        return view ('client/billings',compact('get_resources'));
    }

    public function billings_resource(Request $request){
        
        $id = $request->resource_id;

        $get_details = DB::table('billings')->select('billings.*','billings.id as bid','client_resources.*','projects.job_title')->join('client_resources', 'billings.client_resources_id', '=', 'client_resources.id')->join('projects', 'client_resources.project_id', '=', 'projects.id')->where('billings.client_id', Auth::id())->where('billings.resource_id', $id)->get();

        



        // echo "<pre>"; print_r($get_details); exit;
        
        return view('client/ajax_billings', compact('get_details'));
       
        die();
        
    }

    public function MyTeam(){

        $client_id = Auth::id();

        $get_resource_id = DB::table('client_resources')->where('client_id', $client_id)->where('applied', 3)->pluck('resource_id')->toArray();
    
        $get_resources = DB::table('resources')->whereIn('id', $get_resource_id)->get();


        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        return view ('client/my_team', compact('get_resources','get_primary_skills','get_skills'));
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function getStates(Request $request){
        $id = $request->country;
        $get_states = DB::table('states')->where('country_id', $id)->get();
        $html = '<option value="">Select State</option>';

        foreach ($get_states as $state) {
            $html .= '<option value=' . $state->name . '>' . $state->name . '</option>';
        }
        echo $html;

    }

    public function ViewPostJob(){
        $get_primary_skills = DB::table('services')->get();
        $get_countries = DB::table('countries')->get();
        $get_states = DB::table('states')->get();

        $get_experiences = DB::table('experiences')->where('status', 1)->get();
        $get_locations = DB::table('locations')->where('status', 1)->get();
        
        return view ('client/post_job',compact('get_primary_skills','get_countries','get_states','get_experiences','get_locations'));
    }

    public function addPost(Request $request){
        request()->validate([
            'job_title' => 'required',
            'primary_skills' => 'required',
            'skills' => 'required',
            'location' => 'required',
            'rate_type' => 'required',
            'budget' => 'required',
            'duration' => 'required',
            'job_type' => 'required',
            
            'experience' => 'required',
            'project_description' => 'required',

        ],[
            'job_title.required' => 'Please enter title of post.',
            'primary_skills.required' => 'Please select service.',
            'skills.required' => 'Please select atleast one skill.',
            'location.required' => 'Please enter location.',
            'rate_type.required' => 'Please enter location.',
            'budget.required' => 'Please enter monthly budget.',
            'duration.required' => 'Please enter duration.',
            'job_type.required' => 'Please select job type.',
        
            'experience.required' => 'Please select experience required.',
            'project_description.required' => 'Please enter project description.',
        ]);
     

            $agency_id = Auth::id();

            $job_title = $request->job_title;
            $primary_skills = $request->primary_skills;

            $skills = '';
            $skills_array = $request->skills;
            if (!empty($skills_array)) {
                $skills = implode(',', $skills_array);
            }

            $location = $request->location;  
            $rate_type = $request->rate_type;  
            $budget = $request->budget;         
            $duration = $request->duration;     
            $job_type = $request->job_type;     
           
            $experience = $request->experience;
            $project_description = $request->project_description;

            DB::table('projects')->insert([
                'client_id' => $agency_id,
                'status' => '0',
                'is_active' => '1',
                'job_title' => $job_title,
                'primary_skills' => $primary_skills,
                'skills' => $skills,
                'location' => $location,
                'rate_type' => $rate_type,
                'budget' => $budget,
                'duration' => $duration,
                'job_type' => $job_type,
                
                'experience' => $experience,
                'project_description' => $project_description,
               
                'updated_at' => NOW(),
                'created_at' => NOW(),
            ]);

        return redirect('/client_dashboard')->with('success', 'Your new job has been addded.');
    }
    
    public function addClientProfile(Request $request){
        
        $client_id = Auth::id();

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $company_name = $request->company_name;
        $country = $request->country;

        $establishment_year = $request->establishment_year;
        $website_link = $request->company_website;
        $description = $request->about_company;

        DB::table('users')->where('id', $client_id)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'updated_at' => NOW(),
        ]);

        

        DB::table('clients')->where('user_id', $client_id)->update([
            'company_name' => $company_name,
            'establishment_year' => $establishment_year,
            'about_company' => $description,
            'company_website' => $website_link,
            'country' => $country,
            'updated_at' => NOW(),

        ]);


        return back()->with('success', 'Your profile has been updated.');

    }

    public function addClientProfileImg(Request $request){
        request()->validate([
            'avatar' => 'required',
        ],
        [
            'avatar.required' => 'Please choose image first.'
        ]);

       $profile_img = $request->file('avatar');  

        $img = time() . '.' . $profile_img->getClientOriginalExtension();

        $destinationPath = public_path('/profile');
        $profile_img->move($destinationPath, $img);

        DB::table('clients')->where('user_id', Auth::id())->update([
            'company_logo' => $img,
        ]);

        return back()->with('success','Profile photo uploaded.');
    }

    public function getSecondarySkillsJob(Request $request)
    {

        $id = $request->primary_skills;
        $get_secondary_skills = DB::table('skills')->where('service_id', $id)->get();
        $html = '<option value="">Select Skills</option>';

        foreach ($get_secondary_skills as $skills) {
            $html .= '<option value=' . $skills->id . '>' . $skills->skill . '</option>';
        }
        echo $html;
    }

    public function projectDetails($id){
        $id = base64_decode($id);
      
        $get_project_detail = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->where('projects.id', $id)->join('clients', 'projects.client_id', '=', 'clients.user_id')->first();

        $get_primary_skills = DB::table('services')->get();

        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        $get_id = DB::table('client_resources')->where('project_id', $id)->groupBy('resource_id','project_id')->pluck('resource_id')->toArray();

        $get_resources = DB::table('resources')->whereIn('resources.id', $get_id)->select('resources.id as rid', 'resources.*', 'agencies.id as aid', 'agencies.skills as askills', 'agencies.*')->join('agencies', 'resources.agency_id', '=', 'agencies.user_id')->get();
       
        return view('client/project_detail',compact('get_project_detail','get_skills','get_resources','get_primary_skills'));

    }

    public function projectProfileDetails($id){
        $id = base64_decode($id);
    
        $get_project_detail = DB::table('projects')->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->where('projects.id', $id)->join('clients', 'projects.client_id', '=', 'clients.user_id')->first();

             echo "<pre>"; print_r($get_project_detail);exit;
        $get_primary_skills = DB::table('services')->get();

        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        $get_id = DB::table('client_resources')->where('project_id', $id)->groupBy('resource_id','project_id')->pluck('resource_id')->toArray();

         $get_resources = DB::table('resources')->whereIn('resources.id', $get_id)->select('resources.id as rid', 'resources.*', 'agencies.id as aid', 'agencies.skills as askills', 'agencies.*')->join('agencies', 'resources.agency_id', '=', 'agencies.user_id')->get();

         return view('client/project_profile_details/edit_profile',compact('get_project_detail','get_skills','get_resources','get_primary_skills'));

    }

    public function viewResource($id, $pid){
        
        $id = base64_decode($id);
        $pid = base64_decode($pid);

        $get_resource = DB::table('resources')->where('resources.id', $id)->select('resources.*','resources.id as rid', 'resources.primary_skills as rps', 'resources.skills as rskills', 'agencies.*', 'agencies.id as aid')->join('agencies','resources.agency_id', '=', 'agencies.user_id')->first();

        $get_status = DB::table('client_resources')->where('resource_id', $id)->where('project_id', $pid)->first();
        $applied = $get_status->applied;

        $get_resource_projects = DB::table('resource_projects')->where('resource_id', $id)->get();

        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();

        return view('client/resource_details',compact('get_resource','get_resource_projects','get_primary_skills','get_skills','pid','applied'));
        
    }


    public function hire_resource($id, $pid){
        $id = base64_decode($id);
        $pid = base64_decode($pid);

        $get_status = DB::table('client_resources')->where('resource_id', $id)->where('project_id', $pid)->first();

        $applied = $get_status->applied;

        if($applied == 0){
            $shortlist = DB::table('client_resources')->where('resource_id', $id)->where('project_id', $pid)->update(['applied' => 1]);


            //for shortlist mailer
            $details = DB::table('resources')->where('resources.id', $id)->select('resources.*','agencies.company_name','users.email')->join('agencies','resources.agency_id','=','agencies.user_id')->join('users', 'resources.agency_id','=','users.id')->first();

            $project_detail = DB::table('projects')->where('id',$pid)->first();
            $project_name = $project_detail->job_title;

          $first_name = $details->first_name;

          $company_name = $details->company_name;
          $email = $details->email;
        
          $mailer = DB::table('mailers')->where('mail_type', 3)->first();

          $to = $email;
          $subject = $mailer->subject;
          $body = $mailer->body;

         $body = str_replace('{AgencyName}',$company_name,$body);
         $body = str_replace('{ResourceName}',$first_name,$body);
         $body = str_replace('{ProjectName}',$project_name,$body);
         

            //  echo $body; exit;

          $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <title>Welcome</title></head><body style="font-family: arial , sans-serif; padding:0px; margin: 0px;"><div style="width: 100%; float: left; background: #fff; border-top: solid 7px #9777fa; padding: 50px 0px;"> <div style="width: 800px; margin: 0px auto; display: table;"> <div style="width: 100%; float: left; padding: 25px 0px;"> <div style="width:100%; float: left; text-align: center;"><a href="#"> <img src="https://gas-india.com/job_hub/public/images/logo.png" border="0" alt="" style="width:300px; margin:0px 0px 35px;"/> </a></div>';

            $message.= $body;

          $message.= '<div style="width: 100%; border-top: solid 4px #9777fa; padding:0px; margin: 25px 0px 0px; float: left;"> <h5 style="width: 100%; color: #2f2e2e; font-weight: 600; font-size: 17px; text-align: center; float: left;"> <label style="width: 100%; margin: 0px 0px 10px; font-weight: 500; float: left;">Thanks,</label>Team Toilers</h5> </div></div></div></div></body></html>';



            //   Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <info@jobhub.com>' . "\r\n";

            mail($to, $subject, $message, $headers);
           

            return back()->with('success', 'Candidate shortlisted successfully for interview');
        }

    }

    public function reject_resource($id, $pid){
       
        $id = base64_decode($id);
        $pid = base64_decode($pid);

        $reject = DB::table('client_resources')->where('resource_id', $id)->where('project_id', $pid)->update(['applied' => 4]);

        if($reject){
            return back()->with('success', 'Candidate rejected successfully.');
        }else{
            return back()->with('error', 'Something went wrong !');
        }

        
    }

    public function set_interview(Request $request){

          $interview = $request->interview;
          $interview_link = $request->interview_link;

          $pid = $request->pid;
          $rid = $request->rid;

          $details = DB::table('resources')->where('resources.id', $rid)->select('resources.*','agencies.company_name','users.email')->join('agencies','resources.agency_id','=','agencies.user_id')->join('users', 'resources.agency_id','=','users.id')->first();

          $project_detail = DB::table('projects')->where('id',$pid)->first();
          $project_name = $project_detail->job_title;
            //   echo "<pre>"; print_r($details); exit;

          $first_name = $details->first_name;

          $company_name = $details->company_name;
          $email = $details->email;
        
          $mailer = DB::table('mailers')->where('mail_type', 4)->first();

          $to = $email;
          $subject = $mailer->subject;
          $body = $mailer->body;

         $body = str_replace('{AgencyName}',$company_name,$body);
         $body = str_replace('{ResourceName}',$first_name,$body);
         $body = str_replace('{InterviewDate}',$interview,$body);
         $body = str_replace('{ProjectName}',$project_name,$body);

            //  echo $body; exit;

          $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <title>Welcome</title></head><body style="font-family: arial , sans-serif; padding:0px; margin: 0px;"><div style="width: 100%; float: left; background: #fff; border-top: solid 7px #9777fa; padding: 50px 0px;"> <div style="width: 800px; margin: 0px auto; display: table;"> <div style="width: 100%; float: left; padding: 25px 0px;"> <div style="width:100%; float: left; text-align: center;"><a href="#"> <img src="https://gas-india.com/job_hub/public/images/logo.png" border="0" alt="" style="width:300px; margin:0px 0px 35px;"/> </a></div>';

            $message.= $body;

          $message.= '<p style="width: 100%; float: left; text-align: center; line-height: 30px; font-size: 17px; color: #2f2e2e; font-weight: 500; margin: 25px 0px;">All the Best!!</p><div style="width: 100%; border-top: solid 4px #9777fa; padding:0px; float: left;"> <h5 style="width: 100%; color: #2f2e2e; font-weight: 600; font-size: 17px; text-align: center; float: left;"> <label style="width: 100%; margin: 0px 0px 10px; font-weight: 500; float: left;">Thanks,</label>Team Toilers</h5> </div></div></div></div></body></html>';



            //   Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <info@jobhub.com>' . "\r\n";

            mail($to, $subject, $message, $headers);



        $set_interview = DB::table('client_resources')->where('resource_id', $rid)->where('project_id', $pid)->update([
            'interview_date' => $interview,
            'interview_link' => $interview_link

        ]);

        if($set_interview){
            

            $shortlist = DB::table('client_resources')->where('resource_id', $rid)->where('project_id', $pid)->update(['applied' => 2]);
        }

        if($shortlist){

            return back()->with('success', 'Interview scheduled');
        }

    }

    public function hireDate(Request $request){
       
        $hire_from = $request->hire_from;
        $hire_till = $request->hire_till;
        $hire_from_new = $request->hire_from;

 
        $rid = $request->rid;
        $pid = $request->pid;

        $get_status = DB::table('client_resources')->where('resource_id', $rid)->where('project_id', $pid)->first();

        $applied = $get_status->applied;

        $client_resource_id = $get_status->id;
        $agency_id = $get_status->agency_id;
        $client_id = $get_status->client_id;
        $pay = $get_status->pay;

        //for hire mailer

         $details = DB::table('resources')->where('resources.id', $rid)->select('resources.*','agencies.company_name','users.email')->join('agencies','resources.agency_id','=','agencies.user_id')->join('users', 'resources.agency_id','=','users.id')->first();
        
         $project_detail = DB::table('projects')->where('id',$pid)->first();
         $project_name = $project_detail->job_title;

         $first_name = $details->first_name;
         $email = $details->email;
         $company_name = $details->company_name;
          
         $mailer = DB::table('mailers')->where('mail_type', 5)->first();

         $to = $email;
         $subject = $mailer->subject;
         $body = $mailer->body;

         $body = str_replace('{AgencyName}',$company_name,$body);
         $body = str_replace('{ResourceName}',$first_name,$body);
         $body = str_replace('{HireDate}',$hire_from,$body);
         $body = str_replace('{ProjectName}',$project_name,$body);

        //  echo $body; exit;

         $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <title>Welcome</title></head><body style="font-family: arial , sans-serif; padding:0px; margin: 0px;"><div style="width: 100%; float: left; background: #fff; border-top: solid 7px #9777fa; padding: 50px 0px;"> <div style="width: 800px; margin: 0px auto; display: table;"> <div style="width: 100%; float: left; padding: 25px 0px;"> <div style="width:100%; float: left; text-align: center;"><a href="#"> <img src="https://gas-india.com/job_hub/public/images/logo.png" border="0" alt="" style="width:300px; margin:0px 0px 35px;"/> </a></div>';

         $message.= $body;

         $message.= '<p style="width: 100%; float: left; text-align: center; line-height: 26px; font-size: 17px; color: #2f2e2e; font-weight: 500; margin: 10px 0px 0px;">You can reach us to <a href="mailto:support@toilers.co" style="color:#fc2e5e; font-weight:600; text-decoration: none;"> support@toilers.co </a> for any further questions.</p><div style="width: 100%; border-top: solid 4px #9777fa; padding:0px; margin: 25px 0px 0px; float: left;"> <h5 style="width: 100%; color: #2f2e2e; font-weight: 600; font-size: 17px; text-align: center; float: left;"> <label style="width: 100%; margin: 0px 0px 10px; font-weight: 500; float: left;">Thanks,</label>Team Toilers</h5> </div></div></div></div></body></html>';

        //  echo $message; exit;
         //Always set content-type when sending HTML email
         $headers = "MIME-Version: 1.0" . "\r\n";
         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

         // More headers
         $headers .= 'From: <info@jobhub.com>' . "\r\n";

         mail($to, $subject, $message, $headers);

        //for hire mailer

        if($applied == 2){
            $ts1 = strtotime($hire_from);
            $ts2 = strtotime($hire_till);

            $year1 = date('Y', $ts1);
            $year2 = date('Y', $ts2);

            $month1 = date('m', $ts1);
            $month2 = date('m', $ts2);

            $diff = (($year2 - $year1) * 12) + ($month2 - $month1);

            if($diff==0)
            {
                $start_date[] = $hire_from;
                $end_date[] = $hire_till;
                $due_date[] = date('Y-m-05', strtotime('+1 month', strtotime($hire_till))); 
            }
            else
            {
                for($i=0; $i<=$diff; $i++)
                {
                    
                        $start_date_array[] = $hire_from;
                    
                        $end_date = date('Y-m-t',strtotime($hire_from));
                    
                    
                        if($end_date<=$hire_till)
                        {
                            $end_date = $end_date;
                        }
                        else
                        {
                            $end_date = $hire_till;
                        }


                        $end_date_array[] =  $end_date;
                    
                        $due_date_array[] = date('Y-m-05', strtotime('+1 month', strtotime($hire_from)));
                        $hire_from = date('Y-m-01', strtotime('+1 month', strtotime($hire_from)));
                }
            }

            if($start_date_array)
            {
                foreach($start_date_array as $key => $data)
                {
                    $start_date = $data;
                    $end_date = $end_date_array[$key];
                    $due_date = $due_date_array[$key];
                    // echo 'start date: '.$start_date.'--> End date: '.$end_date.'--> Due Date: '.$due_date.'<br>';
                    
                    $billing = DB::table('billings')->insert([
                        'client_resources_id' => $client_resource_id,
                        'agency_id' => $agency_id,
                        'client_id' => $client_id,
                        'resource_id' => $rid,
                        'billing_start_date' => $start_date,
                        'billing_end_date' => $end_date,
                        'due_date' => $due_date,        
                        'billing_amount' => $pay,        
                        'updated_at' => NOW(),
                        'created_at' => NOW(),
                    ]);       


                }
            }
            $reject_resource = DB::table('client_resources')->where('resource_id', $rid)->update(['applied' => 5]);

            $shortlist = DB::table('client_resources')->where('resource_id', $rid)->where('project_id', $pid)->update(['applied' => 3]);

            $update_resource = DB::table('resources')->where('id', $rid)->update(['is_available' => 2]);


            if($shortlist){             

                $set_hire_date = DB::table('client_resources')->where('resource_id', $rid)->where('project_id', $pid)->update([
                    'date_of_hiring' => $hire_from_new,
                    'end_date_of_hiring' => $hire_till,
                ]);
            }                             


            return back()->with('success', 'Candidate hired');
        }
     
    }


    public function resourcePayment(Request $request){

        $payment_sent = $request->payment_sent;
        $billing_id = $request->bid;

        if($request->hasFile('payment_proof'))
        {
            $payment_proof = $request->file('payment_proof');
            $img = time() . '.' . $payment_proof->getClientOriginalExtension();

            $destinationPath = public_path('/payment_proof');
            $payment_proof->move($destinationPath, $img);
        }


        $update = DB::table('billings')->where('id',$billing_id)->update([
            'paid_amount' => $payment_sent,
            'pay_proof' => $img,
            'payment_date' => NOW(),
        ]);

        return back()->with('success', 'Amount Paid.');
        
    }


}   