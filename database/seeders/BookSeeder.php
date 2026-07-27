<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Year;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            'Saýlanan Eserler',
            'Lirika we Goşgular',
            'Gorkut Ata',
            'Köpetdagyň Eteginde',
            'Öğretmenim, Lütfen Bu Kitabi Okur Musun!',
            'Gerçek Tip Dersleri',
            'Clean Code',
            'Laravel Up & Running',
            'HTML & CSS Design',
            'Ylymlar Dünýäsi'
        ];

        foreach ($books as $book) {
            Book::create([
                'category_id' => Category::inRandomOrder()->first()->id,
                'author_id' => Author::inRandomOrder()->first()->id,
                'year_id' => Year::inRandomOrder()->first()->id,
                'language_id' => Language::inRandomOrder()->first()->id,
                'publisher_id' => Publisher::inRandomOrder()->first()->id,
                'name' => $book,
                'page_number' => rand(100, 500),
                'code' => fake()->uuid(),
            ]);
        }
    }
}