<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pokemon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            'pokemon' => 'Bulbasaur',
            'type' => 'Grass',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Charmander',
            'type' => 'Fire',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Squirtle',
            'type' => 'Water',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Pikachu',
            'type' => 'Electric',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Eevee',
            'type' => 'Normal',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Mew',
            'type' => 'Psychic',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Mewtwo',
            'type' => 'Psychic',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Snorlax',
            'type' => 'Normal',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('pokemon')->insert([
            'pokemon' => 'Gengar',
            'type' => 'Ghost',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

    }
}
