<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['club_id', 'player_id', 'position', 'player_position'];

    public function club(){
        return $this->belongsTo(Club::class);
    }
}
