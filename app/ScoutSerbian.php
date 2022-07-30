<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoutSerbian extends Model
{
    protected $fillable = [
        'hiding', 'night-vision', 'knowledge-of-the-terrain','equipment','survival-in-the-jungle'
    ];
}
