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
    }
}
