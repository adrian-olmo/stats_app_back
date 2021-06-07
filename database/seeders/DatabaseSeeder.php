<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\PositionSeeder;
use Database\Seeders\TeamSeeder;
use Database\Seeders\CompetitionSeeder;
use Database\Seeders\TeamCompetitionSeeder;
use Database\Seeders\PlayerSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(CompetitionSeeder::class);
        $this->call(TeamCompetitionSeeder::class);
        $this->call(PlayerSeeder::class);
    }
}
