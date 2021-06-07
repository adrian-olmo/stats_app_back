<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'Belgica',
            'confederation' => 'UEFA',
            'manager' => 'Roberto Martínez',
            'fifa_rank' => '1',
            'total_titles' => '0',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/bel',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Francia',
            'confederation' => 'UEFA',
            'manager' => 'Didier Deschamps',
            'fifa_rank' => '2',
            'total_titles' => '6',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/fra',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Brasil',
            'confederation' => 'CONMEBOL',
            'manager' => 'Tite',
            'fifa_rank' => '3',
            'total_titles' => '22',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/bra',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Inglaterra',
            'confederation' => 'UEFA',
            'manager' => 'Gareth Southgate',
            'fifa_rank' => '4',
            'total_titles' => '1',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/eng',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Portugal',
            'confederation' => 'UEFA',
            'manager' => 'Fernando Santos',
            'fifa_rank' => '5',
            'total_titles' => '2',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/por',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'España',
            'confederation' => 'UEFA',
            'manager' => 'Luis Enrique',
            'fifa_rank' => '6',
            'total_titles' => '4',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/esp',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Italia',
            'confederation' => 'UEFA',
            'manager' => 'Roberto Mancini',
            'fifa_rank' => '7',
            'total_titles' => '6',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/ita',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Argentina',
            'confederation' => 'CONMEBOL',
            'manager' => 'Lionel Scaloni',
            'fifa_rank' => '8',
            'total_titles' => '21',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/arg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Uruguay',
            'confederation' => 'CONMEBOL',
            'manager' => 'Óscar Tabárez',
            'fifa_rank' => '9',
            'total_titles' => '19',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/uru',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams')->insert([
            'name' => 'Dinamarca',
            'confederation' => 'UEFA',
            'manager' => 'Kasper Hjulmand',
            'fifa_rank' => '10',
            'total_titles' => '2',
            'logo' => 'https://api.fifa.com/api/v1/picture/flags-sq-4/den',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
