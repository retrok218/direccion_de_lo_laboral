<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Brenda Vazquez',
            'email'=>'brenda@gmail.com',
            'password'=> Hash::make('BrendaV2023'),            
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
