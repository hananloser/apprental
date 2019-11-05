<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'warna'         => $faker->colorName , 
        'plat_polisi'   => $faker->name,
        'jenis'         => 'jazz',
        'nomor_chasis'  => $faker->randomAscii , 
    ];
});
