<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Tecnología', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['name' => 'Ciencia', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['name' => 'Arte', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['name' => 'Deporte', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
            ['name' => 'Educación', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => now()],
        ]);
    }
}
