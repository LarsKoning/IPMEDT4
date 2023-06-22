<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ReserveringenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reserveringen')->insert([
            'owner' => '1',
            'reservering' => '2023-06-18',
            'bedrag' => '33'
        ]);
        DB::table('reserveringen')->insert([
            'owner' => '1',
            'reservering' => '2023-06-19',
            'bedrag' => '33'
        ]);
        DB::table('reserveringen')->insert([
            'owner' => '1',
            'reservering' => '2023-06-20',
            'bedrag' => '33'
        ]);

        DB::table('reserveringen')->insert([
            'owner' => '2',
            'reservering' => '2023-06-20',
            'bedrag' => '33'
        ]);
        
        DB::table('reserveringen')->insert([
            'owner' => '3',
            'reservering' => '2023-06-20',
            'bedrag' => '33'
        ]);
    }
}
