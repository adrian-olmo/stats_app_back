<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Players;
use App\Models\Competitions;
use App\Models\Matches;

class Teams extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'confederation', 'manager', 'fifa_rank', 'total_titles', 'logo'];
    protected $hidden = ['created_at', 'updated_at'];

    public function player()
    {
        return $this->belongsTo(Players::class, 'team_id');
    }

    public function competition()
    {
        return $this->belongsToMany(Competitions::class, 'teams_competitions');
    }

    public function matchLocal()
    {
        return $this->belongsTo(Matches::class, 'local_team');
    }

    public function matchVisitor()
    {
        return $this->belongsTo(Matches::class, 'visitor_team');
    }
}
