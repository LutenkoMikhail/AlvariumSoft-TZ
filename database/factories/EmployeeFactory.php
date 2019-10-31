<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $departmentId = \App\Department::all()->random()->id;

    $typePaymentEmployee = $faker->randomElement([false, true]);
    if ($typePaymentEmployee === true) {
        $payment = $faker->randomFloat(10, 1000, 10000);
    } else {
        $payment = $faker->randomFloat(10, 1, 99);
    }

    return [
        'name' => $faker->firstName,
        'surname' => $faker->LastName,
        'birthday' => $faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
        'position_employee' => $faker->unique()->word(),
        'payment' => $payment,
        'type_payment_employee' => $typePaymentEmployee,
        'department_id' => $departmentId

    ];
});
