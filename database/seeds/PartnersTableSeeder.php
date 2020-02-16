<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'city_id'=>1,
                'namepartner' => 'Mohamed'
            ],
            [
                'city_id'=>2,
                'namepartner' => 'Hassan'
            ],
            [
                'city_id'=>3,
                'namepartner' => 'Nada'
            ]
       
              ]);
    }
}
