<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $name = 'yousif';
        $email = 'yousifhakel50@gmail.com';
        $password = Hash::make('01004121711');
        $code = 999;
        $utype = 'ADM';

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'code' => $code,
            'utype' => $utype
        ]);
    }
}
