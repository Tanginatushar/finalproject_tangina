<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $tasks = array(
            ['id' => 1, 'name' => 'Company 1', 'code' => 'task-1', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Company 2', 'code' => 'task-2', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Company 3', 'code' => 'task-3', 'project_id' => 1, 'completed' => false, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Company 4', 'code' => 'task-4', 'project_id' => 1, 'completed' => true, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Company 5', 'code' => 'task-5', 'project_id' => 1, 'completed' => true, 'description' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Company 6', 'code' => 'task-6', 'project_id' => 2, 'completed' => true, 'description' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Company 7', 'code' => 'task-7', 'project_id' => 2, 'completed' => false, 'description' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }

}