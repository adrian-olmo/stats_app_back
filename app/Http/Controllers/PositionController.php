<?php

namespace App\Http\Controllers;

use App\Models\Positions;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Positions::all();
        return response()->json(['positions' => $position], 201);
    }

    public function positionName(Request $request)
    {
        $namePosition = $request->namePosition;
        $result = Positions::where('name', 'like', '%' . $namePosition . '%')->get();
        return response()->json($result);
    }
}
