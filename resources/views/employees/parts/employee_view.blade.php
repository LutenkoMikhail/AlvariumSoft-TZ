<div class="container">
    <div class="card mb-4 shadow-sm">

        <div class="card-body">
            <h5>
                Name:
            </h5>
            <h5
                class="card-title">{{__($employee->name) }}</h5>
            <h5>
                SurName:
            </h5>
            <h5 class="card-title">{{__($employee->surname) }}</h5>
            <h5>
                Birthday:
            </h5>

            <h5 class="card-title">{{__($employee->birthday) }}</h5>
            <h5>
                Position employee:
            </h5>
            <h5 class="card-title">{{__($employee->position_employee) }}</h5>
            <h5>
                Monthly payment:
            </h5>
            @if($employee->type_payment_employee===0)
                <h5 class="card-title">{{__($employee->payment*Config::get('constants.time sheet.hours_per_month')) }}
                    $</h5>
            @else
                <h5 class="card-title">{{__($employee->payment) }} $</h5>
            @endif
            <h5>
                Payment type:
            </h5>
            @if($employee->type_payment_employee===0  )
                <h5 class="card-title">hourly payment</h5>
            @else
                <h5 class="card-title">monthly rate</h5>
            @endif
            <hr>

            <div class="d-flex flex-column justify-content-center align-items-start">
                <small class="text-muted">Department: </small>
                <div class="btn-group align-self-end">
                    @if(!empty($employee->department()->get()))
                        @each('department.parts.department_view', $employee->department()->get(), 'department')
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
</div>
