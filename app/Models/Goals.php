<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Players;

class Goals extends Model
{
    use HasFactory;
    protected $fillable = ['player_id', 'quantity'];
    protected $hidden = ['created_at', 'updated_at'];

    public function player()
    {
        return $this->hasMany(Players::class, 'player_id');
    }
}
