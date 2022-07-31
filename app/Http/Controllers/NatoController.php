<?php

namespace App\Http\Controllers;








use App\Jobs\PlainJob;
use App\NatoGeneral;
use App\NatoTechnicalSoldiers;
use App\Plain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class NatoController extends Controller
{

    public function GetNatoSoldiers(Request $request)
    {
        Artisan::queue('make:job PlainJob');
        return back();
    }
    public function makePlains()
    {
        $this->dispatch(new PlainJob());
         Artisan::call('queue:work --stop-when-empty', []);
    }



}
