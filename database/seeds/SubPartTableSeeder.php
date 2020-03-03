<?php

use Illuminate\Database\Seeder;

class SubPartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\SubPart::class, 10)->create();
    }
}
