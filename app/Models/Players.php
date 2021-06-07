<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'matches', 'debut', 'club', 'team_id', 'position_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function team()
    {
        return $this->hasMany(Teams::class, 'team_id');
    }

    public function position()
    {
        return $this->belongsTo(Positions::class, 'position_id');
    }
}
