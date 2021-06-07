<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Players;

class Positions extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $hidden = ['created_at', 'updated_at'];

    public function player()
    {
        return $this->belongsTo(Players::class, 'position_id');
    }
}
