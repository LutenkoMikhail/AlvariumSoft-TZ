@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __ ('All Department') }} </h3>
            </div>
            <div class="col-md-12">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row ">
                            @each('department.parts.department_view',$departments,'department')
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection













