<?php

use Illuminate\Database\Seeder;

class nonaderant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\nonaderant::class,50)->create();
    }
}
