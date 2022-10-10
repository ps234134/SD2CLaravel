<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leenautos')->insert([
            'merk' => 'Audi',
            'type' => 'A4',
            'bouwjaar' => 2010,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('leenautos')->insert([
            'merk' => 'BMW',
            'type' => '3',
            'bouwjaar' => 2015,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('leenautos')->insert([
            'merk' => 'Tesla',
            'type' => 'Model 3',
            'bouwjaar' => 2018,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('leenautos')->insert([
            'merk' => 'range rover',
            'type' => 'evoque',
            'bouwjaar' => 2019,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('leenautos')->insert([
            'merk' => 'Mercedes',
            'type' => 'A',
            'bouwjaar' => 2017,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
