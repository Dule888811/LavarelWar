<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class SerbianSoldier extends Soldier
{
    /**
     * @var int|mixed
     */

    protected $fillable = ['number'];
    public function __construct($equipment,$efficiency,$courage,$knowledgeOfTheTerrain)
    {
        $this->equipment = $equipment;
        $this->efficiency = $efficiency;
        $this->courage = $courage;
        $this->knowledgeOfTheTerrain = $knowledgeOfTheTerrain;

    }
    public function serbiangeneral(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\SerbianGeneral');
    }

    public function run()
    {
        $this->equipment = 0.5 * $this->equipment;
        $this->efficiency = 0.7 * $this->efficiency;
        $this->courage = 0.8 * $this->courage;
    }

    public function attack()
    {
        $this->efficiency = 1.7 * $this->efficiency;
        $this->courage = 3.8 * $this->courage;
    }
}
