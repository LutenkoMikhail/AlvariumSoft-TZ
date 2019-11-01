@extends('layouts.app')

@section('content')

    <div class="container">
        @each('employees.button.button_paginate',$buttons,'button')
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __ ('All Employees') }} </h3>
            </div>
            <div class="col-md-12">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row ">
                            @each('employees.parts.employee_view',$employees,'employee')
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                {{$employees->links()}}
            </div>
        </div>

@endsection













