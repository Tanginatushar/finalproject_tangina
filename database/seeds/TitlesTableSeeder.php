// /database/migrations/seeds/TitlesTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('titles')->delete();

        $titles = array(
            ['id' => 1, 'author' => 'Title 1', 'summery' => 'title-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'author' => 'Title 2', 'summery' => 'title-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'author' => 'Title 3', 'summery' => 'title-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('titles')->insert($titles);
    }

}