<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('towns')->insert(
            array(
                array(
            'name' => 'Nakuru',
            'slug' => str_slug('Nakuru'),
                ),
                array(
            'name' => 'Naivasha',
            'slug' => str_slug('Naivasha'),
                ),
                array(
            'name' => 'Molo',
            'slug' => str_slug('Molo'),
                ),
                array(
            'name' => 'Gilgil',
            'slug' => str_slug('Gilgil'),
                ),
                array(
            'name' => 'Njoro',
            'slug' => str_slug('Njoro'),
                ),
                 array(
            'name' => 'Mai Mahiu',
            'slug' => str_slug('Mai Mahiu'),
                ),
                 array(
            'name' => 'Subukia',
            'slug' => str_slug('Subukia'),
                ),   array(
            'name' => 'Dundori',
            'slug' => str_slug('Dundori'),
                ),
                   array(
            'name' => 'Salgaa',
            'slug' => str_slug('Salgaa'),
                ),
                   array(
            'name' => 'Mau Narok',
            'slug' => str_slug('Mau Narok'),
                ),
                   array(
            'name' => 'Bahati',
            'slug' => str_slug('Bahati'),
                ),
                array(
            'name' => 'Rongai',
            'slug' => str_slug('Rongai'),
                ),
                 array(
            'name' => 'Olenguruone',
            'slug' => str_slug('Olenguruone'),
                )
        /////////////////////,
            )
        );
    }
}
