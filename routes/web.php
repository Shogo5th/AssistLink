<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/


use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganizationrepController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DocumentController;
<<<<<<< HEAD
use App\Http\Controllers\AppealController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\CashdonationController;
use App\Http\Controllers\GoodController;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
use App\Http\Controllers\AppealController;
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e

// Get all Organizations
Route::get('/getorg',[OrganizationController::class, 'index']);
Route::get('/getorg/getlatestorg',[OrganizationController::class, 'getLastSix']);
<<<<<<< HEAD
=======


Route::get('/loginCheck',[OrganizationController::class, 'loginCheck']);
Route::get('/logout',[UserController::class, 'logout']);

<<<<<<< HEAD
=======
=======

Route::get('/getorg',[OrganizationController::class, 'index']);
=======

Route::get('/getorg',[OrganizationController::class, 'index']);
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b

<<<<<<< HEAD
Route::get('/loginCheck',[OrganizationController::class, 'loginCheck']);
Route::get('/logout',[UserController::class, 'logout']);

=======
Route::get('/findorg',[OrganizationController::class, 'find']);
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d

Route::get('/adduser',[UserController::class, 'index']);
Route::get('/getApplicant',[ApplicantController::class, 'search']);


<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
//Organize Aid Appeal
Route::get('/getallappeal',[AppealController::class, 'searchAll']);
Route::post('/addAppeal',[AppealController::class, 'add']);

<<<<<<< HEAD
// view Appeals
Route::get('/viewCurrentAppeals',[AppealController::class, 'getCurrentAppeals']);
Route::get('/viewPastAppeals',[AppealController::class, 'getPastAppeals']);


Route::post('/loginOrgRep',[OrganizationrepController::class, 'login']);
=======
Route::post('/loginOrgRep',[OrganizationrepController::class, 'login']);
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
Route::post('/loginOrgRep',[OrganizationrepController::class, 'login']);
<<<<<<< HEAD
=======
//Route::get('/loginAdmin',[ApplicantController::class, 'search']);
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e

//find organization from orgID
Route::post('/findOrganization',[OrganizationController::class, 'show']);

// Create new Organization
Route::post('/addorg',[OrganizationController::class, 'add']);

// Login and Logout
Route::post('/loginOrgRep',[OrganizationrepController::class, 'login']);
Route::get('/loginCheck',[OrganizationController::class, 'loginCheck']);
Route::get('/logout',[UserController::class, 'logout']);

// Create Account
Route::post('/addorgrep',[OrganizationrepController::class, 'add']);
Route::post('/adduser',[UserController::class, 'add']);
<<<<<<< HEAD
Route::post('/adduser/applicant',[UserController::class, 'addUserApplicant']);
Route::post('/addApplicant',[ApplicantController::class, 'add']);

// document
Route::post('/uploaddocument',[DocumentController::class, 'add']);

//get Account
Route::get('/adduser',[UserController::class, 'index']);
Route::get('/getApplicant',[ApplicantController::class, 'search']);

//Organize Aid Appeal
Route::get('/getallappeal',[AppealController::class, 'searchAll']);
Route::post('/addAppeal',[AppealController::class, 'add']);
// search current appeals in organization
Route::get('/getallappeal/currentAppeal',[AppealController::class, 'searchCurrent']);

// view Appeals
Route::get('/viewCurrentAppeals',[AppealController::class, 'getCurrentAppeals']);
Route::get('/viewPastAppeals',[AppealController::class, 'getPastAppeals']);
Route::post('/viewCurrentAppeals/inOrganizations',[AppealController::class, 'getCurrentAppealsInOrganization']);


// unique validation
Route::post('/adduser/validate',[UserController::class, 'usernameValidation']);
Route::post('/addApplicant/validate',[ApplicantController::class, 'IDnoValidation']);

// Contribution
Route::post('/addContribution',[ContributionController::class, 'add']);
Route::post('/addContribution/CashDonation',[CashdonationController::class, 'add']);
Route::post('/addContribution/Goods',[GoodController::class, 'add']);
=======

Route::post('/adduser/applicant',[UserController::class, 'addUserApplicant']);

Route::post('/adduser/validate',[UserController::class, 'usernameValidation']);
Route::post('/addApplicant/validate',[ApplicantController::class, 'IDnoValidation']);
Route::post('/addApplicant',[ApplicantController::class, 'add']);
Route::post('/uploaddocument',[DocumentController::class, 'add']);


<<<<<<< HEAD
//find organization from orgID
Route::post('/findOrganization',[OrganizationController::class, 'show']);

=======
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e


Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');