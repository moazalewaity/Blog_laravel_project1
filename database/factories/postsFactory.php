<?php

use Faker\Generator as Faker;

$factory->define(App\post::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->uuid,
        'category_id'=> $faker->randomDigit,
        'title'=> $faker->title,
        'body'=> $faker->text
    ];
});
