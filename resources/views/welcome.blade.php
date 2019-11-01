@extends('layouts.app')

@section('content')
    <div class="links">
        <a href="{{ url('/employees') }}">Employees</a>
        <a href="{{ url('/department') }}">Departments</a>
        <a href="{{ url('/xmlloademployees') }}">Load Employees</a>
        <a href="{{ url('/xmlsaveemployees') }}">Save Employees</a>
        <a href="{{ url('/xmlloaddepartments') }}">Load Departments</a>
        <a href="{{ url('/xmlsavedepartments') }}">Save Departments</a>
    </div>
@endsection
