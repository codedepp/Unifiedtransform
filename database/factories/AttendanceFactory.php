<?php

use Faker\Generator as Faker;

$factory->define(App\Attendance::class, function (Faker $faker) {
    return [
        'present' => $faker->randomElement([0,1,2]),
        'student_id' => $faker->randomElement(App\User::where('role', 'student')->pluck('id')->toArray()),
        'section_id' => $faker->randomElement(App\Section::pluck('id')->toArray()),
        'exam_id' => $faker->randomElement(App\Exam::where('school_id', $faker->randomElement(App\School::pluck('id')->toArray()))->pluck('id')->toArray()),
    ];
});
