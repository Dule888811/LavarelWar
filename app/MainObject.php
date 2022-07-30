<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainObject extends Model
{
    protected $fillable = [
        'stubbornness', 'defense', 'hidden',
    ];
}
