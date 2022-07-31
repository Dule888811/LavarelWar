<?php

namespace App\Console\Commands;

use App\Plain;
use Illuminate\Console\Command;

class bombing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bombing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nato command to bombing';

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
        $planes = Plain::all();
        foreach ($planes as $plane)
        {
            $plane->bombing();
        }
    }
}
