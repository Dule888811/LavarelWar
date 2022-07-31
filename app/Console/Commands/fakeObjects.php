<?php

namespace App\Console\Commands;

use App\ScoutSerbian;
use Illuminate\Console\Command;

class fakeObjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fakeObjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Serbian army create fake war objects';

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
        for($x=0;$x<100;$x++)
        {
            ScoutSerbian::fakeObject();
        }
    }
}
