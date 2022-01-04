<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('users')->insert([
    'name'=>"Hassan Khan",
    'email'=>"hassan@gmail.com",
    'password'=>Hash::make('112233hk'),
]);        
    }
}
