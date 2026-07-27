<?php

namespace Database\Seeders;

use App\Models\Publisher;
use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategorySeeder::class,
            YearSeeder::class,
            LanguageSeeder::class,
            AuthorSeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
        ]);

        Author::factory(20)->create();
        Publisher::factory(30)->create();
        Book::factory(500)->create();
    }
}