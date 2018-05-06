<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('profiles')->insert(
            array(
                array(
                     'user_id' => '1',
                     'coverimage' => 'public/images/defaults/bg7.jpg',
                )
//////////////// , then next array
            )
        );
    }
}


