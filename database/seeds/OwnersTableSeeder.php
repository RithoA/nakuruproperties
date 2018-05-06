<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert(
            array(
                array(
            'name' => 'Nakuland Properties',
            'slug' => str_slug('Nakuland Properties'),
                ),
                array(
            'name' => 'Samland Properties',
            'slug' => str_slug('Samland Properties'),
                )
        /////////////////////,
            )
        );
    }
}
