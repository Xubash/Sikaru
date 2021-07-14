<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobDetails_Controller;
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

Route::resource('/',JobDetails_Controller::class);
Route::GET('/job_view',  [JobDetails_Controller::class,'job_view']);
Route::GET('/{id}/job_edit',  [JobDetails_Controller::class,'job_edit']);
Route::POST('/{id}/job_details_update',  [JobDetails_Controller::class,'job_details_update']);
Route::GET('/{id}/job_delete',  [JobDetails_Controller::class,'job_delete']);
