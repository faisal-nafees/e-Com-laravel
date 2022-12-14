<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Faisal',
            'email'=> 'test@gmail.com',
            'password' => Hash::make('123456'),
        ],
        [
            'name'=> 'Cool',
            'email'=> 'cool@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
