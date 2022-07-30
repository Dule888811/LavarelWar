<?php

use Illuminate\Database\Seeder;

class NatoTechnicalSoldiersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NatoTechnicalSoldiers::class, 4);

    }
}
