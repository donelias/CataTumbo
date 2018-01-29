<?php

use Illuminate\Database\Seeder;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert($data = array(
            [
                'sector'=> 'La Romana',
                'parish_id'=> '156',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}
