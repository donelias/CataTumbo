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

        $this->call(RoleTableSeeder::class);
        $this->call(StatuTableSeeder::class);
        $this->call(TypePersonTableSeeder::class);
        $this->call(SectorTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PersonTableSeeder::class);


    }
}
