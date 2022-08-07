<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function employeedetails(Request $request){
        $employee = new Employee();
        $employee->employee_name = $request->employee_name;
        $employee->profile_photo = $request->profile_photo;
        $employee->company_id = $request->company_id;
        $employee->dob = $request->dob;
        $employee->emirates_id = $request->emirates_id;
        $employee->contract_start_date= $request->contract_start_date;
        $employee->save();
        $employeeId = $employee->id;
        return json_encode($employeeId);
    }
}
