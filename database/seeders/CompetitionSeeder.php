<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competitions')->insert([
            'name' => 'Copa del Mundo',
            'teams_number' => '32',
            'type' => 'mundial',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('competitions')->insert([
            'name' => 'Eurocopa',
            'teams_number' => '24',
            'type' => 'continental',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('competitions')->insert([
            'name' => 'Copa America',
            'teams_number' => '10',
            'type' => 'continental',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('competitions')->insert([
            'name' => 'Medalla Olimpica',
            'teams_number' => '16',
            'type' => 'mundial',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
