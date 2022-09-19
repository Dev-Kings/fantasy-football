<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['pool_id', 'club_name'];

    public function pool(){
        return $this->belongsTo(Pool::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }
}
