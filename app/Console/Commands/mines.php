<?php

namespace App\Console\Commands;

use App\ScoutSerbian;
use Illuminate\Console\Command;

class mines extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mines';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'put mines';

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
        ScoutSerbian::mineTheBattlefield();
    }
}
