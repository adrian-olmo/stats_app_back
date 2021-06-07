<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $fillable = ['local_team', 'visitor_team', 'stadium', 'date', 'competition_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function localTeam()
    {
        return $this->hasMany(Teams::class, 'local_team');
    }

    public function visitorTeam()
    {
        return $this->hasMany(Teams::class, 'visitor_team');
    }
}
