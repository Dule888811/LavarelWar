<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class Soldier extends Model
{
    public $equipment;
    public $efficiency;
    public $courage;
    public $knowledgeOfTheTerrain;
    abstract function run();
    abstract function attack();
}
