<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class heroin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'heroin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Abanac sells heroin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->courage = 4.1 * $this->courage;
        $this->efficiency = 0 * $this->efficiency;
        if(Carbon::now() == 1)
            {
                echo "Serbian won!!";
            }
    }
}
