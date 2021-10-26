<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo 'Hello world from book seeder...';

        $data = json_decode(file_get_contents(storage_path('books.json')));

        foreach($data as $datum){
            $book = new Book;
            $book->title = $datum->title;
//            $book->publication_date	= '2021-10-26';
            $book->image = $datum->image;
            $book->description = $datum->title;
            $book->save();
        }






    }
}
