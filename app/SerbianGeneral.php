<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SerbianGeneral extends Model
{
    public function scoutserbians(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\ScoutSerbian');
    }

    public function serbiansoldiers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\SerbianSoldier');
    }
    public function createPlane()
    {
        $plane = new Plane(0.8);
    }
}
