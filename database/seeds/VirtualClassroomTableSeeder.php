<?php

use Illuminate\Database\Seeder;

class VirtualClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\VirtualClassroom::class, 10)->create();
    }
}
