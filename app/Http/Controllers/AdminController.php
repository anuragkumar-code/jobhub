<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
      
        return view ('admin/login');
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }

    public function admin_dashboard(Request $request){
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

            if (Auth::attempt(['email' => $email, 'password' => $password, 'type' => '3'])) {
                 return redirect('admin/dashboard');
            } else {
                 return back()->with('fail', 'Incorrect Email or Password !');
            }
        }   
    }

    public function Agencies(){
        
        $get_agencies = DB::table('agencies')->select('agencies.*', 'agencies.id as aid', 'agencies.status as astatus', 'users.*')->join('users', 'agencies.user_id', '=', 'users.id')->get();

        return view ('admin/agencies',compact('get_agencies'));
    }


    public function hiredResources(){

        $get_resources = DB::table('client_resources')->where('applied', 3)->select('client_resources.*', 'agencies.*', 'agencies.company_name as acn', 'clients.*')->join('agencies', 'client_resources.agency_id', '=', 'agencies.user_id')->join('clients', 'client_resources.client_id', '=', 'clients.user_id')->get();
       
        // echo "<pre>", print_r($get_resources); exit;
        return view ('admin/hired_resources',compact('get_resources'));
    }

    public function Clients(){

        $get_clients = DB::table('clients')->select('clients.*', 'clients.status as astatus', 'users.*')->join('users', 'clients.user_id', '=', 'users.id')->get();

        return view ('admin/clients',compact('get_clients'));
    }

    public function scheduledInterview(){

        $get_resources = DB::table('client_resources')->where('applied', 2)->select('client_resources.*', 'agencies.*', 'agencies.company_name as acn', 'clients.*')->join('agencies', 'client_resources.agency_id', '=', 'agencies.id')->join('clients', 'client_resources.client_id', '=', 'clients.user_id')->get();

        return view ('admin/scheduled_interview',compact('get_resources'));
    }

    public function adminBilling(){

        return view ('admin/billing');
    }

    public function viewAgency($id){
        $id = base64_decode($id);

        $get_agency = DB::table('agencies')->where('id', $id)->first();

        return view('admin/view_agency',compact('get_agency'));
    }


    public function agencyResources($id){
        $id = base64_decode($id);

        $get_resources = DB::table('resources')->where('agency_id', $id)->get();
        $get_primary_skills = DB::table('services')->pluck('service_name', 'id')->toArray();
        
        return view('admin/agency_resources',compact('get_resources','get_primary_skills'));
    }

    public function clientHiredResources($id){

        $get_hired_resources = DB::table('client_resources')->where('client_id', $id)->where('applied', 3)->pluck('resource_id')->toArray();

        $get_resources = DB::table('resources')->whereIn('resources.id', $get_hired_resources)->join('agencies', 'resources.agency_id', '=', 'agencies.user_id')->get();


        // echo "<pre>"; print_r($get_resources); exit;

        return view('admin/client_hired_resources', compact('get_resources'));
    }

    public function clientProjects($id){
        $id = base64_decode($id);

        $get_projects = DB::table('projects')->where('client_id', $id)->get();

        return view('admin/client_projects', compact('get_projects'));

    }


}