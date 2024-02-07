<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;
use App\Models\Clients;
use App\Models\Users;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{

    public function index()
    {
        return view('front');
    }

    public function agency_login()
    {
        return view('agency/login');
    }

    public function agency_signup()
    {
        return view('agency/signup');
    }

    public function client_login()
    {
        return view('client/login');
    }

    public function client_signup()
    {
        return view('client/signup');
    }

    //-------------------------------- agency login and signup start ----------------------------------------//

    public function agency_registered(Request $request)
    {
        request()->validate(
            [
                'first_name' => 'required|max:30|regex:/^[\pL\s\-]+$/u',
                'company_name' => 'required|max:30|regex:/^[\pL\s\-]+$/u',
                'email' => 'required|email|unique:users|regex:/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
                'company_website' => 'required|regex:/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b(?:[-a-zA-Z0-9()@:%_\+.~#?&\/=]*)$/',
                'mobile' => 'required|unique:users|regex:/[0-9]{9}/',
                'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%#*?&])[A-Za-z\d@$!%*?&]{4,}.\S*$/u',
                'confirm_password' => 'required_with:password|same:password',

            ],
            [
                'first_name.required' => 'First name is required.',
                'company_name.required' => 'Company name is required.',
                'email.required' => 'Email is required.',
                'company_website.required' => 'Company website is required.',
                'mobile.required' => 'Mobile number is required.',
                'password.required' => 'Password is required.',

            ]
        );

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $company_name = $request->company_name;
        $email = $request->email;
        $website = $request->company_website;
        $mobile = $request->mobile;
        $password = Hash::make($request->password);

       

        DB::table('users')->insert([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'type' => '1',
            'status' => '1',
            'mobile' => $mobile,
            'email' => $email,
            'password' => $password,
            'updated_at' => NOW(),
            'created_at' => NOW()

        ]);

        $id = DB::getPdo()->lastInsertId();
        // dd($id);

        DB::table('agencies')->insert([
            'user_id' => $id,
            'status' => 1,
            'company_website' => $website,
            'company_name' => $company_name,
            'updated_at' => NOW(),
            'created_at' => NOW()

        ]);

        $mailer = DB::table('mailers')->where('mail_type', 1)->first();

        $to = $email;
        $subject = $mailer->subject;

        $body = $mailer->body;

        $body = str_replace('{Name}',$company_name,$body);

        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <title>Welcome</title></head><body style="font-family: arial , sans-serif; padding:0px; margin: 0px;"><div style="width: 100%; float: left; background: #fff; border-top: solid 7px #9777fa; padding: 50px 0px;"> <div style="width: 800px; margin: 0px auto; display: table;"> <div style="width: 100%; float: left; padding: 25px 0px;"> <div style="width:100%; float: left; text-align: center;"><a href="#"> <img src="https://gas-india.com/job_hub/public/images/logo.png" border="0" alt="" style="width:300px; margin:0px 0px 35px;"/> </a></div>';

        $message.= $body;

        $message.= ' <h2 style="width: 100%; float: left; text-align: center; font-size: 32px; color: #2f2e2e; font-weight: 600; margin: 20px 0px 25px;">Welcome to Toilers!</h2> <p style="width: 100%; float: left; text-align: center; line-height: 26px; font-size: 17px; color: #2f2e2e; font-weight: 500; margin: 0px 0px;">Thanks you for completing the registration.<br/> You can reach us to <a href="mailto:support@toilers.co" style="color:#fc2e5e; font-weight:600; text-decoration: none;">support@toilers.co</a> <br/> for any further question.</p><div style="width: 100%; border-top: solid 4px #9777fa; padding:0px; margin: 25px 0px 0px; float: left;"> <h5 style="width: 100%; color: #2f2e2e; font-weight: 600; font-size: 17px; text-align: center; float: left;"> <label style="width: 100%; margin: 0px 0px 10px; font-weight: 500; float: left;">Thanks,</label>Team Toilers</h5> </div></div></div></div></body></html>';

        //   Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <info@jobhub.com>' . "\r\n";

        // mail($to, $subject, $message, $headers);


        return redirect('/agency_login')->withSuccess('You have been registered now, Login here to proceed.');
    }

    public function agency_logedin(Request $request)
    {
        if ($request->all() != null) {

            request()->validate(
                [

                    'email' => 'required|email',
                    'password' => 'required',

                ],
                [

                    'email.required' => 'Email is required.',
                    'password.required' => 'Password is required.',

                ]
            );

            $email = $request->email;
            $password = $request->password;

            if (Auth::attempt(['email' => $email, 'password' => $password, 'type' => '1'])) {

                return redirect('agency/projects');
            } else {

                return back()->with('fail', 'Incorrect Email or Password !');
            }
        }
    }

    public function agency_dashboard()
    {
        return view('agency/projects');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function agencyForgotPassword()
    {
        // echo "hi"; exit;
        return view('agency/forgot_password');
    }

    public function clientForgotPassword()
    {
        return view('client/forgot_password');
    }

    public function agency_forgotPassword(Request $request)
    {
        // echo "hello";
        request()->validate(
            [
                'email' => 'required|email|regex:/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
            ],
            [
                'email.required' => 'Email is required.',
            ]
        );

        $email = $request->email;

        $get_email = DB::table('users')->where('email', $email);

        if ($get_email->count() > 0) {

            $get_user_details = $get_email->first();

            $url = url('/newpassword') . '/' . base64_encode($email) . '/' . md5($get_user_details->id);

            $to = $email;

            $subject = "Forgot Password";

            $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
            <head>
            <meta name='viewport' content='width=device-width'>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <title>{subject}</title>
            <style>
                     # Add your styles
                     body {
                     background-color: white;
                     font-family: sans-serif;
                     -webkit-font-smoothing: antialiased;
                     font-size: 14px;
                     line-height: 1.4;
                     margin: 0;
                     padding: 0;
                     -ms-text-size-adjust: 100%;
                     -webkit-text-size-adjust: 100%;
                     }
                  </style>
            </head>
            <body>
            <p>Someone has requested a password reset for the following account:</p>
            <p> To reset your password click here $url, visit the following address: </p>
            <a href=''> Reset Password </a>
            <br> 
            <p> Thank you!</p>
            <p> Company Name.</p>
                                                   
            </body>
            </html> ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <info@jobhub.com>' . "\r\n";

            mail($to, $subject, $message, $headers);


            return back()->with('success', 'Check your mail to reset password !');
        } else {
            return back()->with('fail', 'Email id not found !');
        }
    }

    public function client_forgotPassword(Request $request)
    {
        
        request()->validate(
            [
                'email' => 'required|email|regex:/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
            ],
            [
                'email.required' => 'Email is required.',
            ]
        );

        $email = $request->email;

        $get_email = DB::table('users')->where('email', $email);

        // echo "<pre>"; print_r($get_email); exit;

        if ($get_email->count() > 0) {

            $get_user_details = $get_email->first();
            // echo "hello";
            $url = url('/clientnewpassword') . '/' . base64_encode($email) . '/' . md5($get_user_details->id);

            $to = $email;

            $subject = "Recover Password";

            $message = "hey click here $url";
            $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
            <head>
            <meta name='viewport' content='width=device-width'>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <title>{subject}</title>
            <style>
                     # Add your styles
                     body {
                     background-color: white;
                     font-family: sans-serif;
                     -webkit-font-smoothing: antialiased;
                     font-size: 14px;
                     line-height: 1.4;
                     margin: 0;
                     padding: 0;
                     -ms-text-size-adjust: 100%;
                     -webkit-text-size-adjust: 100%;
                     }
                  </style>
            </head>
            <body>
            <p>Someone has requested a password reset for the following account:</p>
            <p> To reset your password click here $url, visit the following address: </p>
            <a href=''> Reset Password </a>
            <br> 
            <p> Thank you!</p>
            <p> Company Name.</p>
                                                   
            </body>
            </html> ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <info@jobhub.com>' . "\r\n";

            mail($to, $subject, $message, $headers);


            return back()->with('success', 'Check your mail to reset password !');
        } else {
            return back()->with('fail', 'Email id not found !');
        }
    }
 
    public function AgencyResetPassword($email = '', $id = '')
    {
        $encrypt_email = $email;
        $encrypt_id = $id;

        $email = base64_decode($email);
        $get_user_data = DB::table('users')->where('email', $email);
        if ($get_user_data->count() > 0) {
            $user_id = $get_user_data->first()->id;
            if (md5($user_id) == $encrypt_id) {
                // echo "all good";
                return view('/agency/newpassword', compact('encrypt_email', 'encrypt_id'));
            } else {
                echo '<h2>You are not authorized to access this page </h2>';
            }
        } else {
            echo '<h2>You are not authorized to access this page </h2>';
        }
    }

    public function ClientResetPassword($email = '', $id = ''){
        $encrypt_email = $email;
        $encrypt_id = $id;

        $email = base64_decode($email);
        $get_user_data = DB::table('users')->where('email', $email);
        if ($get_user_data->count() > 0) {
            $user_id = $get_user_data->first()->id;
            if (md5($user_id) == $encrypt_id) {
                // echo "all good";
                return view('/client/newpassword', compact('encrypt_email', 'encrypt_id'));
            } else {
                echo '<h2>You are not authorized to access this page </h2>';
            }
        } else {
            echo '<h2>You are not authorized to access this page </h2>';
        }


    }

    public function newPassword(Request $request){
        // echo "hello";
        request()->validate([
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%#*?&])[A-Za-z\d@$!%*?&]{4,}.\S*$/u',
            'confirm_password' => 'required_with:password|same:password',
        ],
        [
            'password.required' => 'Please enter new password.'
        ]);

        $newpassword = Hash::make($request->password);

        $user_id = $request->user_id;


        $encrypt_email = $request->email;
    	$encrypt_id = $request->user_id;

    	$email = base64_decode($encrypt_email);
    	$get_user_data = DB::table('users')->where(['email'=>$email]);
    	if($get_user_data->count() > 0)
    	{
    		$user_id = $get_user_data->first()->id;
    		if(md5($user_id)==$encrypt_id)
    		{
    			DB::table('users')

		        ->where('id', $user_id)

		        ->update([

		            'password' => $newpassword,

				]); 

    			return redirect('/agency_login')->with('success','Password changed successfully, you can login now.');
                
    		}
    		else
    		{
    			echo '<h2>You are not authorized to access this page </h2>';
    		}
    	}	
    	else
    	{
    		echo '<h2>You are not authorized to access this page </h2>';
    	}



    }

    public function ClientNewPassword(Request $request){
        // echo "hello";
        request()->validate([
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!#%*?&])[A-Za-z\d@$!%*?&]{4,}.\S*$/u',
            'confirm_password' => 'required_with:password|same:password',
        ],
        [
            'password.required' => 'Please enter new password.'
        ]);

        $newpassword = Hash::make($request->password);

        $user_id = $request->user_id;

        $encrypt_email = $request->email;
    	$encrypt_id = $request->user_id;

    	$email = base64_decode($encrypt_email);
    	$get_user_data = DB::table('users')->where(['email'=>$email]);
    	if($get_user_data->count() > 0)
    	{
    		$user_id = $get_user_data->first()->id;
    		if(md5($user_id)==$encrypt_id)
    		{
    			DB::table('users')

		        ->where('id', $user_id)

		        ->update([

		            'password' => $newpassword,

				]); 

    			return redirect('/client_login')->with('success','Password changed successfully, you can login now.');
                
    		}
    		else
    		{
    			echo '<h2>You are not authorized to access this page </h2>';
    		}
    	}	
    	else
    	{
    		echo '<h2>You are not authorized to access this page </h2>';
    	}

    }

    //------------------ agency login and signup end --------------------------------------------------//

    //------------------ client login and signup start ------------------------------------------------//

    public function client_registered(Request $request)
    {
        request()->validate(
            [
                'email' => 'required|email|unique:users|regex:/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',
                'first_name' => 'required|max:30|regex:/^[\pL\s\-]+$/u',
                'company_name' => 'required',
                'company_website' => 'required|regex:/(?:www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b(?:[-a-zA-Z0-9()@:%_\+.~#?&\/=]*)$/', 
                'mobile' => 'required|unique:users|regex:/[0-9]{9}/',
                'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!#%*?&])[A-Za-z\d@$!%*?&]{4,}.\S*$/u',
                'confirm_password' => 'required_with:password|same:password',

            ],
            [
                'client_email.required' => 'Email is required.',
                'first_name.required' => 'First name is required.',
                'company_name.required' => 'Company name required',
                'client_mobile.required' => 'Mobile number is required.',
                'password.required' => 'Password is required.',
                'company_website.required' => 'Company website is required.',

            ]
        );

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $company_name = $request->company_name;
        $company_website = $request->company_website;
        $mobile = $request->mobile;
        $password = Hash::make($request->password);

        DB::table('users')->insert([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'type' => '2',
            'status' => '1',
            'mobile' => $mobile,
            'email' => $email,
            'password' => $password,
            'updated_at' => NOW(),
            'created_at' => NOW()
        ]);

        $id = DB::getPdo()->lastInsertId();

        DB::table('clients')->insert(['user_id' => $id, 'status' => 1,'company_name' => $company_name, 'company_website' => $company_website]);

        $mailer = DB::table('mailers')->where('mail_type', 2)->first();

        $to = $email;
        $subject = $mailer->subject;

        $body = $mailer->body;

        $body = str_replace('{Name}',$company_name,$body);

        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <title>Welcome</title></head><body style="font-family: arial , sans-serif; padding:0px; margin: 0px;"><div style="width: 100%; float: left; background: #fff; border-top: solid 7px #9777fa; padding: 50px 0px;"> <div style="width: 800px; margin: 0px auto; display: table;"> <div style="width: 100%; float: left; padding: 25px 0px;"> <div style="width:100%; float: left; text-align: center;"><a href="#"> <img src="https://gas-india.com/job_hub/public/images/logo.png" border="0" alt="" style="width:300px; margin:0px 0px 35px;"/> </a></div>';

        $message.= $body;

        $message.= ' <h2 style="width: 100%; float: left; text-align: center; font-size: 32px; color: #2f2e2e; font-weight: 600; margin: 20px 0px 25px;">Welcome to Toilers!</h2> <p style="width: 100%; float: left; text-align: center; line-height: 26px; font-size: 17px; color: #2f2e2e; font-weight: 500; margin: 0px 0px;">Thanks you for completing the registration.<br/> You can reach us to <a href="mailto:support@toilers.co" style="color:#fc2e5e; font-weight:600; text-decoration: none;">support@toilers.co</a> <br/> for any further question.</p><div style="width: 100%; border-top: solid 4px #9777fa; padding:0px; margin: 25px 0px 0px; float: left;"> <h5 style="width: 100%; color: #2f2e2e; font-weight: 600; font-size: 17px; text-align: center; float: left;"> <label style="width: 100%; margin: 0px 0px 10px; font-weight: 500; float: left;">Thanks,</label>Team Toilers</h5> </div></div></div></div></body></html>';

        //   Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <info@jobhub.com>' . "\r\n";

        mail($to, $subject, $message, $headers);


        return redirect('/client_login')->withSuccess('You have been registered now, Login here to proceed.');
    }

    public function client_loggedin(Request $request)
    {
        request()->validate(
            [

                'email' => 'required|email',
                'password' => 'required',

            ],
            [

                'email.required' => 'Email is required.',
                'password.required' => 'Password is required.',

            ]
        );

        $email = $request->email;
        $password = $request->password;

            if (Auth::attempt(['email' => $email, 'password' => $password, 'type' => '2'])) {
                
                return redirect('client_dashboard');
                // echo "success";
            } else {

                return back()->with('fail','Incorrect Email or Password !');
            }
    }


    public function client_dashboard()
    {
        $project = DB::table('projects')->where('client_id', Auth::id())->where('status', 0)->count();

        $get_countries = DB::table('countries')->get();

        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        $get_skills = DB::table('skills')->pluck('skill', 'id')->toArray();
        
        $get_projects = DB::table('projects')->where('client_id', Auth::id())->where('is_active', 1)->select('projects.id as pid', 'projects.*','clients.id as cid', 'clients.*')->join('clients', 'projects.client_id', '=', 'clients.user_id')->orderBy('pid', 'DESC');

        $get_active_projects_count = $get_projects->count();
        $get_active_projects = $get_projects->get();

        $get_inactive_projects = DB::table('projects')->where('client_id', Auth::id())->where('is_active', 2)->get();

        return view('client/client_dashboard', compact('project','get_primary_skills','get_skills','get_active_projects','get_inactive_projects','get_countries','get_active_projects_count'));
        
    }
    

    
}
