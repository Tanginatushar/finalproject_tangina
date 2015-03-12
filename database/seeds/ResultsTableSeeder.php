<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('results')->delete();

        $results = array(
            ['id' => 1, 'author' => 'Result 1', 'summery' => 'result-1', 'title_id' => 1, 'completed' => false, 'detail' => 'My first result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'author' => 'Result 2', 'summery' => 'result-2', 'title_id' => 1, 'completed' => false, 'detail' => 'My first result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'author' => 'Result 3', 'summery' => 'result-3', 'title_id' => 1, 'completed' => false, 'detail' => 'My first result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'author' => 'Result 4', 'summery' => 'result-4', 'title_id' => 1, 'completed' => true, 'detail' => 'My second result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'author' => 'Result 5', 'summery' => 'result-5', 'title_id' => 1, 'completed' => true, 'detail' => 'My third result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'author' => 'Result 6', 'summery' => 'result-6', 'title_id' => 2, 'completed' => true, 'detail' => 'My fourth result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'author' => 'Result 7', 'summery' => 'result-7', 'title_id' => 2, 'completed' => false, 'detail' => 'My fifth result', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('results')->insert($results);
    }

}