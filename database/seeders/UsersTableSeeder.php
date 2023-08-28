<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run(): void
    {
        $user =[
        ['name'=>'Jaber', 'email'=>'njb99m@gmail.com', 'password'=>'12345678'],
        ['name'=>'Jaber', 'email'=>'njb99m@gmail.com', 'password'=>'12345678'],
        ['name'=>'Jaber', 'email'=>'njb99m@gmail.com', 'password'=>'12345678']
    ];
    User::insert($user);
    }


}
