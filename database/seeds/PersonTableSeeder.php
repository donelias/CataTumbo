<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert($data = array(
            [
                'type_id'=> '1',
                'identity' => '18560314',
                'name' => 'HECTOR ELIAS',
                'last_name' => 'GALINDEZ MERCEDEZ',
                'phone_nomber' => '+58-246-456-4432',
                'cellphone' => '+58-414-456-4432',
                'address' => 'CALLE SANTA EDUVIGES #40, LOS LAURELES',
                'sector_id' => '1',
                'role_id' => '1',
                'status_id' => '1',
                'user_id' => '1',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
