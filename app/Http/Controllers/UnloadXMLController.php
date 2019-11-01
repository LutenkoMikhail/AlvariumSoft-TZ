<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnloadXMLController extends Controller
{
    public function xmlSaveDepartments()
    {
        return view('xml.department.save');
    }

    public function xmlSaveEmployees()
    {
        return view('xml.employee.save');
    }
}
