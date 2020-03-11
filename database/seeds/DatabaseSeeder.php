<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubCategoryTableSeeder::class);
        $this->call(TrainingTableSeeder::class);
        $this->call(OrganizationTableSeeder::class);
        $this->call(SubscriptionTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(QuizTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(VirtualClassroomTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(PartTableSeeder::class);
        $this->call(SubPartTableSeeder::class);
        $this->call(ForumTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);


    }
}
