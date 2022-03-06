<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/getorg',[OrganizationController::class, 'index']);
Route::get('/adduser',[UserController::class, 'index']);

Route::post('/addorgrep',[OrganizationrepController::class, 'add']);
Route::post('/adduser',[UserController::class, 'add']);



Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');