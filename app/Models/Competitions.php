<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teams;

class Competitions extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'teams_number', 'type'];
    protected $hidden = ['created_at', 'updated_at'];

    public function team()
    {
        return $this->belongsToMany(Teams::class, 'teams_competitions');
    }
}
