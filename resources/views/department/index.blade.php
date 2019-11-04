@extends('layouts.app')

@section('content')
    @if (count($departments)!==0)
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
        </div>
    @else
        <h3 class="text-center">
            The list of departments is empty !
        </h3>
    @endif
@endsection













