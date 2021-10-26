<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        echo 'Hello from default DatabaseSeeder Class';

        $this->call('Database\Seeders\UserSeeder');
        $this->call('Database\Seeders\BookSeeder');


    }
}
