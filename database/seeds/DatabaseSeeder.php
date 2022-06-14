<?php

use Illuminate\Database\Seeder;
use TravelsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TravelsTableSeeder::class);
    }
}
