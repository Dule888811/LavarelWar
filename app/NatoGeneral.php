<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NatoGeneral extends Model
{
    public function NatoSoldier(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\NatoSoldier');
    }
    public function NatoTechnicalSoldiers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\NatoTechnicalSoldiers');
    }
}
