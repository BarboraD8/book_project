<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class RandomPublishersToBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Book::all() as $book){
            $book->publisher_id = random_int(1, 4);
            $book->save();
        }
    }
}
