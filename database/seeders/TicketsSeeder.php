<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Ticket::insert([
            ['client_id' => 2, 'book_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['client_id' => 2, 'book_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['client_id' => 2, 'book_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['client_id' => 3, 'book_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['client_id' => 3, 'book_id' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
