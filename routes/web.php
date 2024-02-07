<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[FrontController::class,'index']);

Route::get('/agency_login',[FrontController::class,'agency_login']);
Route::get('/client_login',[FrontController::class,'client_login']);

Route::get('/agency_signup',[FrontController::class,'agency_signup']);
Route::get('/client_signup',[FrontController::class,'client_signup']);

Route::post('/agency_registered',[FrontController::class,'agency_registered'])->name('agency_registered');
Route::post('/agency_logedin',[FrontController::class,'agency_logedin'])->name('agency_logedin');


Route::post('/client_registered',[FrontController::class,'client_registered'])->name('client_registered');
Route::post('/client_logedin',[FrontController::class,'client_loggedin'])->name('client_loggedin');
 

Route::get('/agency_forgot_password',[FrontController::class,'agencyForgotPassword']);
Route::post('/agency_password_reset',[FrontController::class,'agency_forgotPassword'])->name('agency.forgot.password');
Route::get('/newpassword/{email}/{id}',[FrontController::class,'AgencyResetPassword']);
Route::post('/agency/updatepassword',[FrontController::class,'newPassword'])->name('updatePassword');

Route::get('/client_forgot_password',[FrontController::class,'clientForgotPassword']);
Route::post('/client_password_reset',[FrontController::class,'client_forgotPassword'])->name('client_forgot_password');
Route::get('/clientnewpassword/{email}/{id}',[FrontController::class,'ClientResetPassword']);
Route::post('/client/updatepassword',[FrontController::class,'ClientNewPassword'])->name('ClientUpdatePassword');

Route::get('/admin/login',[AdminController::class,'admin']);

Route::post('/admin/dashboard',[AdminController::class,'admin_dashboard'])->name('admin_login');

View::composer('agency.layout.head', function ($view) {
    $id = Auth::id();
    $get_profile_photo = DB::table('agencies')->where('user_id', $id)->first();
    $photo = $get_profile_photo->company_logo;

    $view->with(['photo'=>$photo]);    
});

View::composer('client.layout.head', function ($view) {
    $id = Auth::id();
    $get_profile_photo = DB::table('clients')->where('user_id', $id)->first();
    $photo = $get_profile_photo->company_logo;

    $view->with(['photo'=>$photo]);    
});


View::composer('admin.layout.head', function ($view) {
    
    $get_agencies_count = DB::table('agencies')->count();
    $get_clients_count = DB::table('clients')->count();
        
    $view->with(['get_clients_count'=>$get_clients_count,'get_agencies_count'=>$get_agencies_count]);
});


//-------------------------------Agency Middleware Routes----------------------------------------//

Route::group(['middleware' => ['agency']], function(){
    Route::get('/agency_dashboard',[FrontController::class,'agency_dashboard']);
    Route::get('/agency/resources',[AgencyController::class,'resources']);
    Route::get('/agency/add_resources',[AgencyController::class,'resource']);
    Route::get('/agency/logout',[FrontController::class,'logout']);
    Route::post('/agency/developer',[AgencyController::class,'addDeveloper'])->name('agency.developer');
    Route::post('/get-skills',[AgencyController::class,'getSecondarySkills'])->name('get-skills');
    Route::get('/agency/projects',[AgencyController::class,'projects']);
    Route::get('/agency/my_profile',[AgencyController::class,'viewMyProfile']);
    Route::get('/agency/services',[AgencyController::class,'viewServices']);

    Route::post('/agency/addprofile',[AgencyController::class,'addProfile'])->name('agency.addprofile');
    Route::post('/agency/addprofileimg',[AgencyController::class,'addProfileImg'])->name('agency.profileimg');
    Route::post('/agency/addservices',[AgencyController::class,'addServices'])->name('add-services');
    Route::post('/get-technologies',[AgencyController::class,'getTechnologies'])->name('get-technologies');
    Route::post('/job-replied',[AgencyController::class,'addReply'])->name('job-replied');
    Route::get('/agency/job_details/{id}',[AgencyController::class,'jobDetails'])->name('job_details');
    Route::get('/agency/applied_job_details/{id}',[AgencyController::class,'AppliedJobDetails'])->name('applied_job_details');
    Route::get('/agency/resource_details/{id}',[AgencyController::class,'resourceDetails'])->name('resourceDetails');

    Route::get('/agency/resource_details/edit/{id}',[AgencyController::class,'getResource'])->name('editResource');
    Route::get('/agency/resource_details/update',[AgencyController::class,'updateResource'])->name('updatesResource');

    Route::post('/agency/get-state',[AgencyController::class,'getStates'])->name('agency-get-state');
    Route::get('/agency/billings',[AgencyController::class,'billings']);
    Route::get('/agency/filter',[AgencyController::class,'projectFilter'])->name('projectFilter');
    Route::post('/agency/filter',[AgencyController::class,'projectFilter'])->name('projectFilter');
    
    Route::post('/agency/billing_resource',[AgencyController::class,'agency_billings_resource'])->name('get_agency_resources');



   

});
//--------------------------------------------------------------------------------------------------//



//-----------------------------------Client Middleware Routes-----------------------------------------//

Route::group(['middleware' => ['client']], function(){
    Route::get('/client_dashboard',[FrontController::class,'client_dashboard']);
    Route::get('/client/my_profile',[ClientController::class,'viewMyProfile']);
    Route::get('/client/postjob',[ClientController::class,'ViewPostJob']);
    Route::get('/client/my_team',[ClientController::class,'MyTeam']);
    Route::get('/client/logout',[ClientController::class,'logout']);
    Route::post('/get-state',[ClientController::class,'getStates'])->name('get-state');
    Route::post('/add-post',[ClientController::class,'addPost'])->name('add-post');

    Route::post('/client/addprofile',[ClientController::class,'addClientProfile'])->name('add/client/profile');
    Route::post('/client/addprofileimg',[ClientController::class,'addClientProfileImg'])->name('clients.profileimg');
    Route::post('/get-skills-job',[ClientController::class,'getSecondarySkillsJob'])->name('get-skills-job');
    Route::get('/client/job_details/{id}',[ClientController::class,'projectDetails'])->name('project_details');
    Route::get('/client/job_details/edit_profile/{id}',[ClientController::class,'projectProfileDetails'])->name('project_profile_details');
    Route::get('/client/project/resource_detail/{id}/{pid}',[ClientController::class,'viewResource'])->name('view_candidate');
    Route::get('/client/project/reply/{id}/{pid}',[ClientController::class,'hire_resource'])->name('hire_resource');
    Route::get('/client/project/reply/reject/{id}/{pid}',[ClientController::class,'reject_resource']);
    Route::post('/client/set_interview',[ClientController::class,'set_interview'])->name('set_interview');
    Route::get('/client/billings',[ClientController::class,'billings']);
    Route::post('/client/billings/payment',[ClientController::class,'resourcePayment']);

    Route::post('/client/resource',[ClientController::class,'billings_resource'])->name('get_resources');
    Route::post('/client/project/resource/hire_date',[ClientController::class,'hireDate'])->name('hireDate');

     
});



//--------------------------------------------------------------------------------------------------//

//-----------------------------------Admin Middleware Routes-----------------------------------------//
Route::group(['middleware' => ['admin']], function(){

    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin_logout');

    Route::get('/admin/agencies',[AdminController::class,'Agencies'])->name('admin_agencies');
    Route::get('/admin/hired_resources',[AdminController::class,'hiredResources'])->name('hired_resources');
    Route::get('/admin/clients',[AdminController::class,'Clients'])->name('admin_clients');
    Route::get('/admin/scheduled_interview',[AdminController::class,'scheduledInterview'])->name('admin_interview');
    Route::get('/admin/billing',[AdminController::class,'adminBilling'])->name('admin_billing');
    Route::get('/admin/view_agency/{id}',[AdminController::class,'viewAgency']);

    Route::get('/admin/agencies/resources/{id}',[AdminController::class,'agencyResources'])->name('agencyResources');
    Route::get('/admin/client/hired_resources/{id}',[AdminController::class,'clientHiredResources']);
    Route::get('/admin/client/projects/{id}',[AdminController::class,'clientProjects']);

});



//--------------------------------------------------------------------------------------------------//