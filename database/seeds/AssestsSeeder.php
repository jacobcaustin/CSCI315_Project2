<?php

use Illuminate\Database\Seeder;

class AssestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Asset::class, 2)->create();
    }
}
