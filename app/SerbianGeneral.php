<?php

namespace App;

use App\Http\Traits\GeneralTrait;
use Illuminate\Database\Eloquent\Model;

class SerbianGeneral extends Model
{
use GeneralTrait;
    public function scoutserbians(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\ScoutSerbian');
    }

    public function serbiansoldiers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\SerbianSoldier');
    }

}
