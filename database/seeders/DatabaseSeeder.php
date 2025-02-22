<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PublishersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(TicketsSeeder::class);
    }
}
