<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamCompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Copa America
        DB::table('teams_competitions')->insert([
            'team_id' => '8',
            'competition_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '3',
            'competition_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '9',
            'competition_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Eurocopa
        DB::table('teams_competitions')->insert([
            'team_id' => '7',
            'competition_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '10',
            'competition_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '6',
            'competition_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '5',
            'competition_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '2',
            'competition_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Mundial
        DB::table('teams_competitions')->insert([
            'team_id' => '7',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '8',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '9',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '2',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '4',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '6',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teams_competitions')->insert([
            'team_id' => '3',
            'competition_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
