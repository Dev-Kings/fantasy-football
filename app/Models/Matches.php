<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matches extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'matches';

    protected $fillable = ['match_id', 'match_day'];

    protected $casts = [
        'match_day' => 'datetime'
    ];
}
