<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = Players::select('players.*', 'teams.name as team', 'positions.name as position')
            ->join('teams', 'players.team_id', 'teams.id')
            ->join('positions', 'players.position_id', 'positions.id')
            ->get();

        return response()->json(['players' => $player], 201);
    }

    public function store(Request $request)
    {
        try {
            $newPlayer = $request->all();
            $player = Players::create($newPlayer);
            return response()->json(['message' => 'Created Succesfully'], 201);
        } catch (\Error $error) {
            return response()->json($error);
        }
    }

    public function update(Request $request, $id)
    {
        $player = Players::findOrFail($id);

        if ($request->has('name')) {
            $player->name = $request->name;
        }
        if ($request->has('age')) {
            $player->age = $request->age;
        }
        if ($request->has('matches')) {
            $player->matches = $request->matches;
        }
        if ($request->has('debut')) {
            $player->debut = $request->debut;
        }
        if ($request->has('team_id')) {
            $player->team_id = $request->team_id;
        }
        if ($request->has('position_id')) {
            $player->position_id = $request->position_id;
        }

        $player->save();
        return response()->json(['message' => 'Update Succefuly'], 205);
    }

    public function destroy($id)
    {
        $playerDel = Players::findOrFail($id);
        $playerDel->delete();

        return response()->json(['message' => 'Delete Succefuly'], 202);
    }

    public function findPlayer($id)
    {
        $playerFind = Players::findOrFail($id);
        return response()->json($playerFind, 202);
    }

    //Funciones Propias

    public function playerTeam($id)
    {
        $playerTeam = $id;

        $result = Players::select('players.*', 'teams.name as team', 'positions.name as position')
            ->join('teams', 'players.team_id', 'teams.id')
            ->join('positions', 'players.position_id', 'positions.id')
            ->where('teams.id',  $playerTeam)
            ->get();
        return response()->json($result);
    }
}
