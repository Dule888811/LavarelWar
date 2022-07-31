<?php

namespace App;

class NatoSoldier extends  Soldier
{
    public $albanian;
    public $wicked;
    public function __construct($equipment,$efficiency,$courage,$knowledgeOfTheTerrain,$albanian,$wicked)
    {
        $this->equipment = $equipment;
        $this->efficiency = $efficiency;
        $this->courage = $courage;
        $this->knowledgeOfTheTerrain = $knowledgeOfTheTerrain;
        $this->albanian = $albanian;
        $this->wicked = $wicked;
    }
    public function natogeneral(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\NatoGeneral');
    }

    public function run()
    {
        $this->equipment = 0.3 * $this->equipment;
        $this->efficiency = 0.3 * $this->efficiency;
        $this->courage = 0.2 * $this->courage;
    }

    public function attack()
    {
        $this->efficiency = 1.7 * $this->efficiency;
        $this->courage = 1.8 * $this->courage;
    }
    public function wicked()
    {
        $this->equipment = 0.2 * $this->equipment;
        $this->efficiency = 0.2 * $this->efficiency;
        $this->courage = 0.1 * $this->courage;
    }

    public function buyHeroin()
    {
        $this->courage = 4.1 * $this->courage;
        $this->efficiency = 0 * $this->efficiency;
    }
}
