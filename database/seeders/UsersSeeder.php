<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fran',
            'last_name' => 'Silva',
            'second_last_name' => 'Lopez',
            'role_id' => 2,
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);

        User::create([
            'name' => 'Juan',
            'last_name' => 'Perez',
            'second_last_name' => 'Gomez',
            'role_id' => 1,
            'email' => 'juan@example.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);

        User::create([
            'name' => 'Maria',
            'last_name' => 'Gonzalez',
            'second_last_name' => 'Martinez',
            'role_id' => 1,
            'email' => 'maria@example.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);

        User::create([
            'name' => 'Luis',
            'last_name' => 'Rodriguez',
            'second_last_name' => 'Lopez',
            'role_id' => 1,
            'email' => 'luis@example.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ]);
    }
}
