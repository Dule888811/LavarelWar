<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class NatoTechnicalSoldiers extends Model
{
    protected $fillable = [
        'knowledge','name',
    ];
    public function natogeneral(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\NatoGeneral');
    }
    public function createPlane()
    {
       $plane = new Plain();
        $plane->efficiency = 0.8;
        $plane->save();
    }
}
