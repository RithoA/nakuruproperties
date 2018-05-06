<?php

use Illuminate\Database\Seeder;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adverts')->insert(
            array(
                array(
            'user_id' => '1',
            'coverimage' => 'public/images/coverimage/HomeAdvert.jpg',
            'company' => 'Nakuru Properties',
            'title' => 'Nakuru Properties',
            'description' => 'Your Next Chapter Begins Here',
            'slug' =>str_slug('Nakuru Properties'),
            'status' => '1',
            'section' => '3',
            'linkcategory' => '3',
                )
/////////////, the next array
            )
        );
    }
}
