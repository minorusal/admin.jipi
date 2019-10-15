<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
	$name = $faker->unique()->name;
	if (str_word_count($name, 0) > 1) {
		$name = str_replace(".", " ", $name);
		$slug = str_replace(" ", "_", $name);
	} else {
		$slug = $name;
	}
	
    return [
		'name' => $name,
        'slug' => $slug,
    ];
});
