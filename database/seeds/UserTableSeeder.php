<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($data = array(
            [
                'user'=> 'Donelias02',
                'email'=> 'hector@gmail.com',
                'password'=> bcrypt('022519'),
                'remember_token' => str_random(10),
                'role_id' => '1',
                'status_id' => '1',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])
        );
    }
}
