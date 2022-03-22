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
use App\Http\Controllers\AppealController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\CashdonationController;
use App\Http\Controllers\GoodController;

// Get all Organizations
Route::get('/getorg',[OrganizationController::class, 'index']);
Route::get('/getorg/getlatestorg',[OrganizationController::class, 'getLastSix']);

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


Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');