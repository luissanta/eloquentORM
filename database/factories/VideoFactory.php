<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Video;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Video::class, function (Faker $faker) {
    return [
        'name' => $this->faker->sentence,
        'category_id' => $this->rand(1, 4),
        'user_id' => $this->rand(1, 5),
    ];
});
