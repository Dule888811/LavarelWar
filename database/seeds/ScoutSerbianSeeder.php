<?php

use Illuminate\Database\Seeder;

class ScoutSerbianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ScoutSerbian::class, 5)->create();
    }
}
