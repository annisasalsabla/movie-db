<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder lain jika ada
        $this->call([
            CategorySeeder::class,
            // Tambahkan seeder lain jika ada, misal: UserSeeder::class
        ]);

        // Buat data dummy untuk tabel movies
        Movie::factory(50)->create();

        // Contoh buat 1 user khusus (opsional, bisa diaktifkan kalau mau)
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
