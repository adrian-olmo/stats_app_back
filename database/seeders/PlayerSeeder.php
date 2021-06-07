<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = File::get(__DIR__ . '/players.json');
        $result = json_decode($data);

        DB::table('players')->delete();
        foreach ($result as $key) {
            DB::table('players')->insert(
                array(
                    'name' => $key->name,
                    "age" => $key->age,
                    "matches" => $key->matches,
                    "debut" => $key->debut,
                    "team_id" => $key->team_id,
                    "position_id" => $key->position_id
                )

            );
        }
    }
}
