<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadXMLController extends Controller
{
    public function xmlLoadEmployees()
    {
        return view('xml.employee.load');
    }


    public function xmlLoadDepartments()
    {
        return view('xml.department.load');
    }


}
