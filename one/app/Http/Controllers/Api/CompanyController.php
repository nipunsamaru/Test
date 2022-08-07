<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function companydetails(Request $request){
        $company = new Company();
        $company->name = $request->name;
        $company->save();
        $companyId = $company->id;
        return json_encode($companyId);
    }
}
