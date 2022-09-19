<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pool extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['pool_name'];

    public function clubs(){
        return $this->hasMany(Club::class);
    }
}
