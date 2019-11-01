<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees', 'EmployeeController@index')->name('employees');
Route::get('employees/{department}', 'EmployeeController@allDepartmentEmployees')->name('employees.department');
Route::get('employees/button/{button}', 'EmployeeController@changePaginationPage')->name('employees.changepaginationpage');


Route::get('department', 'DepartmentController@index')->name('departments');

Route::get('xmlloademployees', 'DownloadXMLController@xmlLoadEmployees')->name('xml.loademployees');
Route::get('xmlsaveemployees', 'UnloadXMLController@xmlSaveEmployees')->name('xml.saveemployees');

Route::get('xmlloaddepartments', 'DownloadXMLController@xmlLoadDepartments')->name('xml.loaddepartments');
Route::get('xmlsavedepartments', 'UnloadXMLController@xmlSaveDepartments')->name('xml.savedepartments');
