<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'firstname' => 'Klaas',
            'lastname' => 'Gert',
            'username' => 'Kerrie',
            'email' => 'KlaasGert@gmail.com',
            'password' => bcrypt('gert123456'),
            'birthdate' => '2001-08-13',
        ]);
        DB::table('users')->insert([
            'firstname' => 'Lars',
            'lastname' => 'Jan',
            'username' => 'lan',
            'email' => 'LarsJan@gmail.com',
            'password' => bcrypt('lars123456'),
            'birthdate' => '2000-07-27',
        ]);
        DB::table('users')->insert([
            'firstname' => 'Jaap',
            'lastname' => 'Zaak',
            'username' => 'Japie',
            'email' => 'JaapZaak@gmail.com',
            'password' => bcrypt('jaap123456'),
            'birthdate' => '1998-02-20',
        ]);
    }
}
