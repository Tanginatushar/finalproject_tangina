// /database/migrations/seeds/ProjectsTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('projects')->delete();

        $projects = array(
            ['id' => 1, 'name' => 'Company 1', 'code' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Company 2', 'code' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Company 3', 'code' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('projects')->insert($projects);
    }

}