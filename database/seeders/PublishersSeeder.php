<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publisher::insert([
            ['name' => 'Penguin Random House', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => 0],
            ['name' => 'HarperCollins', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => 0],
            ['name' => 'Simon & Schuster', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => 0],
            ['name' => 'Hachette Livre', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => 0],
            ['name' => 'Macmillan Publishers', 'created_at' => now(), 'updated_at' => now(), 'deleted_at' => 0],
        ]);
    }
}
