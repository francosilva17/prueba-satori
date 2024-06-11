<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria1 = Category::where('name', 'Tecnología')->first();
        $categoria2 = Category::where('name', 'Ciencia')->first();

        Book::insert([
            [
                'title' => 'Laravel for Beginners',
                'category_id' => $categoria1->id,
                'publisher_id' => 2,
                'quantity' => 10,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Advanced PHP Programming',
                'category_id' => $categoria1->id,
                'publisher_id' => 1,
                'quantity' => 5,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Introduction to Quantum Physics',
                'category_id' => $categoria2->id,
                'publisher_id' => 3,
                'quantity' => 7,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Astrobiology: The Search for Life',
                'category_id' => $categoria2->id,
                'publisher_id' => 2,
                'quantity' => 3,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Science of Interstellar',
                'category_id' => $categoria2->id,
                'publisher_id' => 2,
                'quantity' => 4,
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
