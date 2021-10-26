<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Penguin Random House',
            'Hachette Livre',
            'HarperCollins',
            'Macmillan Publishers',
        ];

        foreach ($data as $item) {

            $publisher = new Publisher;

            $publisher->title = $item;

            $publisher->save();

        }
    }
}
