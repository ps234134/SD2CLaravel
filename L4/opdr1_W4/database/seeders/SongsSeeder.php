<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'The Final Countdown',
            'singer' => 'Europe',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Hello',
            'singer' => 'Europe',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Ok',
            'singer' => 'Europe',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'No',
            'singer' => 'Europe',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Sure',
            'singer' => 'Europe',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
