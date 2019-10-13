<?php

use App\Course;
use App\Major;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'code'        => str_random(8),
        'name'        => $faker->name,
        'major_id' => function () use ($faker) {
            if (Major::count())
              return $faker->randomElement(Major::pluck('id')->toArray());
            else return factory(Major::class)->create()->id;
        },
        'level'       => $faker->randomElement(['Level 5', 'Level 6', 'Level 7', 'Level 8', 'Level 9']),
        'type'  => $faker->randomElement(['Compulsory', 'Elective']),
        'credit'      => $faker->randomElement([1, 2, 3, 4, 5]),
        'active'      => 1,
    ];
});
