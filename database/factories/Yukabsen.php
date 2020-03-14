<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Yukabsen;
use Faker\Generator as Faker;

$factory->define(Yukabsen::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'kelas' => $faker->name,
        'hari' => $faker->name,
        'tanggal' => $faker->name,
        'bulan' => $faker->name,
        'tahun' => $faker->name,
        'kehadiran' => $faker->name
        
    ];
});
