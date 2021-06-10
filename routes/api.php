<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Models\Players;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'prefix' => 'auth'
    ],
    function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('signup', [AuthController::class, 'signUp']);
        Route::group(
            [
                'middleware' => 'auth:api'
            ],
            function () {
                Route::get('logout', [AuthController::class, 'logout']);
                Route::get('/role', [AuthController::class, 'getRole']);
                Route::get('/user', [AuthController::class, 'getUser']);
            }
        );
    }
);

Route::group(
    [
        'prefix' => 'teams',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [TeamController::class, 'index']);
        Route::get('/{id}', [TeamController::class, 'show']);
        Route::get('/team', [TeamController::class, 'teamName']);
        Route::get('/confederation', [TeamController::class, 'teamConfederation']);
        Route::get('/manager', [TeamController::class, 'teamManager']);
    }
);


//Rutas posiciones
Route::group(
    [
        'prefix' => 'positions',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [PositionController::class, 'index']);
        Route::get('/position', [PositionController::class, 'positionName']);
    }
);

//Rutas jugadores
Route::group(
    [
        'prefix' => 'players',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [PlayerController::class, 'index']);
        Route::get('/player', [PlayerController::class, 'playerName']);
        Route::get('/player-position', [PlayerController::class, 'playerPosition']);
        Route::get('/player-team/{id}', [PlayerController::class, 'playerTeam']);
        Route::get('/debut', [PlayerController::class, 'playerDebut']);
    }
);

//Rutas competiciones
Route::group(
    [
        'prefix' => 'competitions',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [CompetitionController::class, 'index']);
        Route::get('/competition', [CompetitionController::class, 'competitionName']);
        Route::get('/type', [CompetitionController::class, 'competitionType']);
    }
);

//Rutas admin
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth:api', 'scope:admin']
    ],
    function () {
        Route::post('/new-team', [TeamController::class, 'store']);
        Route::patch('/team/{id}', [TeamController::class, 'update']);
        Route::delete('/team/{id}', [TeamController::class, 'destroy']);
        Route::post('/new-player', [PlayerController::class, 'store']);
        Route::patch('/player/{id}', [PlayerController::class, 'update']);
        Route::delete('/player/{id}', [PlayerController::class, 'destroy']);
        Route::get('/player/{id}', [PlayerController::class, 'findPlayer']);
    }
);

//Routes Matches
Route::group(
    [
        'prefix' => 'matches',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/', [MatchesController::class, 'index']);
        Route::get('/match/{id}', [MatchesController::class, 'findMatch']);
        Route::group(
            [
                'middleware' => 'scope:admin'
            ],
            function () {
                Route::post('/new-match', [MatchesController::class, 'store']);
                Route::patch('/change-match/{id}', [MatchesController::class, 'update']);
                Route::delete('/match/{id}', [MatchesController::class, 'destroy']);
            }
        );
    }
);
Route::group(
    [
        'prefix' => 'user',
        'middleware' => 'auth:api'
    ],
    function () {
        Route::get('/user/{id}', [UserController::class, 'show']);
        Route::patch('/profile', [UserController::class, 'update']);
    }
);
