<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            array(
                array(
            'name' => 'Sale',
            'slug' => str_slug('Sale'),
                ),
                array(
            'name' => 'Rent',
            'slug' => str_slug('Rent'),
                )
        /////////////////////,
            )
        );
    }
}
