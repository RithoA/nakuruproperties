<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(OwnersTableSeeder::class);
        $this->call(TownsTableSeeder::class);
        // $this->call(AdvertsTableSeeder::class);
        // $this->call(LocationsTableSeeder::class);

    }
}
