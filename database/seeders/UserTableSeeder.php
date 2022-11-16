<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::created([
            'name' => 'jhon smith',
            'email' => 'jhonsmith@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' =>Str::random(10)
        ]);
    }
}
