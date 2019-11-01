@extends('layouts.app')

@section('content')
                <div class="links">
                    <a href="{{ url('/employees') }}">Employees</a>
                    <a href="{{ url('/department') }}">Departments</a>
                    <a href="{{ url('/') }}">Import Employees</a>
                    <a href="{{ url('/') }}">Export Employees</a>
                    <a href="{{ url('/') }}">Import Departments</a>
                    <a href="{{ url('/') }}">Export Departments</a>
                </div>
@endsection
