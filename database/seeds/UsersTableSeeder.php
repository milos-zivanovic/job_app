<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                array(
                    'id' => '1',
                    'name' => 'Moderator',
                    'email' => 'moderator@test.com',
                    'password' => bcrypt('moderator'),
                    'status' => 0,
                ),
                array(
                    'id' => '2',
                    'name' => 'HR Manager 1',
                    'email' => 'hrmanager1@test.com',
                    'password' => bcrypt('hrmanager1'),
                    'status' => 1,
                ),
                array(
                    'id' => '3',
                    'name' => 'HR Manager 2',
                    'email' => 'hrmanager2@test.com',
                    'password' => bcrypt('hrmanager2'),
                    'status' => 1,
                ),
                array(
                    'id' => '4',
                    'name' => 'Regular User 1',
                    'email' => 'regularuser1@test.com',
                    'password' => bcrypt('regularuser1'),
                    'status' => 2,
                ),
                array(
                    'id' => '5',
                    'name' => 'Regular User 2',
                    'email' => 'regularuser2@test.com',
                    'password' => bcrypt('regularuser2'),
                    'status' => 2,
                ),
                array(
                    'id' => '6',
                    'name' => 'Regular User 3',
                    'email' => 'regularuser3@test.com',
                    'password' => bcrypt('regularuser3'),
                    'status' => 2,
                ),
            )
        );
    }
}
