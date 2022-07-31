<?php

namespace App;

use App\Http\Traits\GeneralTrait;
use Illuminate\Database\Eloquent\Model;

class NatoGeneral extends Model
{
    use GeneralTrait;
    public function NatoSoldier(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\NatoSoldier');
    }
    public function NatoTechnicalSoldiers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\NatoTechnicalSoldiers');
    }
}
