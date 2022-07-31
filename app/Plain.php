<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plain extends Model
{
    protected $fillable = [
        'efficiency',
    ];
    public function bombing()
    {
       if($this->bombing() == 'position_sr')
       {
           SerbianSoldier::all()->count = 0.5 * SerbianSoldier::all()->count;
       }
    }
}
