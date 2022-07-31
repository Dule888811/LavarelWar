<?php

namespace App\Http\Controllers;
use App\Jobs\PlainJob;
use App\NatoGeneral;
use App\NatoSoldier;
use App\NatoTechnicalSoldiers;
use App\Plain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class NatoController extends Controller
{
    public function GetNatoSoldiers(Request $request)
    {
        $mystring = url()->full();

        $pos = substr($mystring, 39);

        $NatoArmy[] = array();
            for($x=0;$x<(int)$pos;$x++)
            {
              $NatoArmy[] =  new NatoSoldier(0.8,0.8,0.4,0,rand(0,1),rand(0,1));
            }
        Artisan::queue('make:job PlainJob');

    }
    public function makePlains()
    {
        $this->dispatch(new PlainJob());
         Artisan::call('queue:work --stop-when-empty', []);
    }
    public static function anyAlbanians($NatoArmy)
    {
        foreach($NatoArmy as $nato)
        {
            if($nato['albanian'])
            {
                return true;
                break;
            }
        }
    }

    public static function anyWicked($NatoArmy)
    {
        foreach($NatoArmy as $nato)
        {
            if($nato['wicked'])
            {
                return true;
                break;
            }
        }
    }

}
