<?php

namespace App\Http\Controllers;
use App\ScoutSerbian;
use App\SerbianSoldier;
use Illuminate\Http\Request;

class SerbianController extends Controller
{
    public function GetSerbianSoldiers(Request $request)
    {
        $mystring = url()->full();
        $pos = substr($mystring, 45);
        $SerbianArmy[] = array();
        for($x=0;$x<(int)$pos;$x++)
        {
            $SerbianArmy[] =  new SerbianSoldier(0.8,0.8,0.4,1);
        }

    }


}
