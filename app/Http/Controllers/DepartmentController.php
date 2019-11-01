<?php

namespace App\Http\Controllers;

use App\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('department.index', [
            'departments' => $departments
        ]);
    }
}
