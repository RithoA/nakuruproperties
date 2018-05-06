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
            'username' => 'RithoA',
            'email' => 'rithoandrew@gmail.com',
            'slug' => str_slug('rithoandrew@gmail.com'),
            'avatar' => 'public/images/defaults/admin.png',
            'gender' => '1',
            'type' => 'admin',
            'verifyToken' => NULL,
            'status' => '1',
            'password' => bcrypt('333Brandthyself+03'),
                )
/////////////, the next array
            )
        );
    }
}


