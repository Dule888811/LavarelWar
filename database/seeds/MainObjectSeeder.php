<?php

use Illuminate\Database\Seeder;

class MainObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MainObject::class, 1)->create();
    }
}
