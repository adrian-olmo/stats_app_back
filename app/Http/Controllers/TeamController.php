<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Players;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::all();
        return response()->json($teams, 201);
    }

    public function show($id)
    {
        $team = Teams::find($id);
        return response()->json($team, 200);
    }

    public function update(Request $request, $id)
    {
        try {
            $team = Teams::findOrFail($id);

            if ($request->has('name')) {
                $team->name = $request->name;
            }
            if ($request->has('confederation')) {
                $team->confederation = $request->confederation;
            }
            if ($request->has('manager')) {
                $team->manager = $request->manager;
            }
            if ($request->has('fifa_rank')) {
                $team->fifa_rank = $request->fifa_rank;
            }
            if ($request->has('total_titles')) {
                $team->total_titles = $request->total_titles;
            }
            if ($request->has('logo')) {
                $team->logo = $request->logo;
            }

            $team->save();
            return response()->json(['message' => "Update Succefuly"], 205);
        } catch (\Exception $error) {
            return response()->json($error, 409);
        }
    }

    public function store(Request $request)
    {
        $newTeam = $request->all();
        $team = Teams::create($newTeam);
        return response()->json(['message' => 'Created succesfully'], 201);
    }

    public function destroy(Request $request)
    {
        $playerTeamId = $request->id;
        Players::where('team_id', $playerTeamId)->delete();
        Matches::where('local_team', $playerTeamId)->orWhere('visitor_team', $playerTeamId)->delete();
        $teamData = Teams::destroy($playerTeamId);

        if (!$teamData) {
            return response()->json(['Team not found'], 400);
        }

        return response()->json(['Delete Succesfuly'], 200);
    }
}
