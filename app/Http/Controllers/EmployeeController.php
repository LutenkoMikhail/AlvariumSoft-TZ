<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EmployeeController extends Controller
{
    protected $paginate;
    protected $buttonPaginate;

    public function __construct()
    {
        $this->paginate = Config::get('constants.paginate.paginate_employees_10');
        $this->buttonPaginate = array_values(Config::get('constants.paginate'));
    }

    public function index()
    {
        $employees = Employee::paginate($this->paginate);
        return view('employees.index', [
            'employees' => $employees,
            'buttons' => $this->buttonPaginate
        ]);
    }

    public function allDepartmentEmployees(Department $department)
    {
        $employees = $department->employee()->paginate($this->paginate);
        return view('employees.department', [
            'employees' => $employees,
            'name_department' => $department->name_department

        ]);
    }

    public function changePaginationPage(Request $request, $button)
    {

        dd($button);
    }
}
