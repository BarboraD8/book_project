<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        echo 'Hello from seeder...';

        DB::table('users')->truncate();

        $user = new User;
        $user->name     = 'User';
        $user->email    = 'user@email.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
