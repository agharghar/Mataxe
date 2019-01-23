<?php

use Illuminate\Database\Seeder;

class aderant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(\App\aderant::class,50)->create();
    }
}
