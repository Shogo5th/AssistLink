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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
use App\Http\Controllers\AppealController;

Route::get('/getorg',[OrganizationController::class, 'index']);
Route::get('/getorg/getlatestorg',[OrganizationController::class, 'getLastSix']);


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

Route::post('/addorg',[OrganizationController::class, 'add']);

Route::post('/addorgrep',[OrganizationrepController::class, 'add']);
Route::post('/adduser',[UserController::class, 'add']);

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


Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');