<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'admintest',
            'email'=>'admintest@test',
            'phoneNumber'=>'991',
            'password'=> Hash::make('admintest'),
            'isAdmin'=>true,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
