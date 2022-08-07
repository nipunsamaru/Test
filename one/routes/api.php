<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\CompanyController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('employeedetails',[EmployeeController::class, 'employeedetails']);

Route::post('companydetails',[CompanyController::class, 'companydetails']);
