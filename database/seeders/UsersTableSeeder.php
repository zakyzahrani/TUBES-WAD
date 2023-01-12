<?php

namespace Database\Seeders;

use App\Models\RegParkir;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@ymail.com';
        $user->password = bcrypt('111');
        $user->role = 'member';
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@ymail.com';
        $user->password = bcrypt('111');
        $user->role = 'pengelola';
        $user->save();
    }
}
