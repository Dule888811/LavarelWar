<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class ScoutSerbian extends Model
{
    protected $fillable = [
        'hiding', 'night-vision', 'knowledge-of-the-terrain','equipment','survival-in-the-jungle'
    ];

    public function serbiangeneral(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\SerbianGeneral');
    }
    public static function fakeObject()
    {
        $object = clone(new MainObject());
    }

    public static function  mineTheBattlefield()
    {
        $mines = array();
        $object = new stdClass;
        $object->name = "lay mines";
        $object->destroy = 1.2;
        $object->hidden = true;
        $object->load = true;
        for($x=0;$x<100;$x++)
        {
          $mines[] =   clone($object);
        }

    }
}


