<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams_Competitions extends Model
{
    use HasFactory;
    protected $fillable = ['team_id', 'competitions_id'];
    protected $hidden = ['created_at', 'updated_at'];
}
