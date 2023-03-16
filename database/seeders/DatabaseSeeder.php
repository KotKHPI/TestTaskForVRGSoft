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
        // \App\Models\User::factory(10)->create();

        $authors = \App\Models\Author::factory(15)->create();

        $books = \App\Models\Book::factory(35)->make()->each(function ($book) use ($authors) {
            $book->author_id = $authors->random()->id;
            $book->save();
    });

        $list_of_authors = \App\Models\ListOfAuthors::factory()->make()->each(function ($list_of_author) use ($authors, $books) {
            $list_of_author->author_id = $authors->random()->id;
            $list_of_author->book_id = $books->random()->id;
            $list_of_author->save();
        });
    }
}
