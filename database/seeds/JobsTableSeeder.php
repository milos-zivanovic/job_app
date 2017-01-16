<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert(
            array(
                array(
                    'id' => '1',
                    'title' => 'Job Post 1',
                    'description' => 'Description of Job Post 1',
                    'user_id' => '2',
                ),
                array(
                    'id' => '2',
                    'title' => 'Job Post 2',
                    'description' => 'Description of Job Post 2',
                    'user_id' => '2',
                ),
                array(
                    'id' => '3',
                    'title' => 'Job Post 3',
                    'description' => 'Description of Job Post 3',
                    'user_id' => '2',
                ),
            )
        );
    }
}
