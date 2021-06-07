<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'name' => 'Portero',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Defensa Central',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Lateral Izquierdo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Lateral Derecho',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Mediocentro Defensivo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Mediocentro Ofensivo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Extremo Izquierdo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Extremo Derecho',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'MediaPunta',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('positions')->insert([
            'name' => 'Delantero Centro',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
