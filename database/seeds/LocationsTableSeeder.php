<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
            array(
                array(
            'name' => 'Pemways',
            'slug' => str_slug('Pemways'),
                ),
                array(
            'name' => 'Milimani',
            'slug' => str_slug('Milimani'),
                ),
                array(
            'name' => 'Mwariki C',
            'slug' => str_slug('Mwariki C'),
                ),
                array(
            'name' => 'Ndege',
            'slug' => str_slug('Ndege'),
                ),
                 array(
            'name' => 'Soilo',
            'slug' => str_slug('Soilo'),
                )
        /////////////////////,
            )
        );
    }
}
