<?php

use Illuminate\Database\Seeder;

class UsersTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert([
            'name' => 'Nilesh Dwivedi',
            'email' => 'dwivedinilesh11@gmail.com',
            'password' => bcrypt('secret'),
            'mobile'	=> '7567360805',
            'role_id'	=>	0,
        ]);

        \DB::table('super_admins')->insert([
            'desciption' => 'test admin',
        ]);
    }
}
