<?php

use Illuminate\Database\Seeder;

class TypePersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_people')->insert($data = array(
            [
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'type_person'=> 'V-',
            ],
            [
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'type_person'=> 'E-',
            ],
            [
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'type_person'=> 'J-',
            ],
            [
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime,
                'type_person'=> 'G-',
            ])

        );
    }
}
