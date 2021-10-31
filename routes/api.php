<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployerController;

/*
| --------------------------------------------------------------------------
|  API Routes
| --------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// to create a resource (posts) in laravel
// 1. create the database and migrations
// 2. create a model
// 2.5 create a service? Eloquent ORM
// 3. create a controller to go get info from the database
// 4. return that info


// --------Company -----------//

Route::resource('company', CompanyController::class);
// Add Company
// View Company
// Delete Company
//Unpublished


// --------Categories----------// 

Route::resource('categories', CategoriesController::class);
// Add Categories 
//  View Categories
// Delete Categories
// Unpublished


// ---------Employer-----------//


Route::resource('employer', EmployerController::class);
// View Employer
// Lock Account


// ---------Employee-----------//


Route::resource('employee', EmployeeController::class);
// View Employee
// Lock Account