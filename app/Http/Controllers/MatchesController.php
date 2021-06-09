<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $match = Matches::select('matches.*', 'L.name as Local', 'V.name as Visitor', 'Comp.name as Competition')
            ->join('teams as L', 'matches.local_team', 'L.id')
            ->join('teams as V', 'matches.visitor_team', 'V.id')
            ->join('competitions as Comp', 'matches.competition_id', 'Comp.id')
            ->get();

        return response()->json($match);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newMatch = $request->all();
        $result = Matches::create($newMatch);
        return response()->json(['message' => 'Created Succesfully']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $match = Matches::findOrFail($id);

        if ($request->has('local_team')) {
            $match->local_team = $request->local_team;
        }
        if ($request->has('visitor_team')) {
            $match->age = $request->age;
        }
        if ($request->has('stadium')) {
            $match->stadium = $request->stadium;
        }
        if ($request->has('date')) {
            $match->date = $request->date;
        }
        if ($request->has('competition_id')) {
            $match->competition_id = $request->competition_id;
        }

        $match->save();
        return response()->json(['message' => 'Updated Succesfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matchDel = Matches::findOrFail($id);
        $matchDel->delete();

        return response()->json(['message' => 'Delete Succesfully']);
    }

    public function findMatch($id)
    {
        $matchFind = Matches::findOrFail($id)->first();
        return response()->json($matchFind, 202);
    }
}
