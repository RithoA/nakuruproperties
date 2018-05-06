<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        DB::table('tags')->insert(
            array(
                array(
            'name' => 'Apartment',
            'slug' => str_slug('Apartment'),
                ),
                array(
            'name' => 'Mansion',
            'slug' => str_slug('mansion'),
                ),
                array(
            'name' => 'Land',
            'slug' => str_slug('Land'),
                ),
                array(
            'name' => 'Commercial',
            'slug' => str_slug('Commercial'),
                ),
                array(
            'name' => '1 Bedroom',
            'slug' => str_slug('1 Bedroom'),
                ),
                array(
            'name' => '2 Bedroom',
            'slug' => str_slug('2 Bedroom'),
                )
        /////////////////////,
            )
        );
    }
}
