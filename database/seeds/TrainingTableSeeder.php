<?php

use Illuminate\Database\Seeder;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Training::class,10)->create();
    }
}
