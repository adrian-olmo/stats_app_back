<?php

namespace App\Http\Controllers;

use App\Models\Competitions;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competition = Competitions::all();
        return response()->json($competition);
    }

    public function competitionName(Request $request)
    {
        $compeName = $request->competition;
        $result = Competitions::where('name', 'like', '%' . $compeName . '%')->get();
        return response()->json($result);
    }
}
