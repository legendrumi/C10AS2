<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        $languages = ['Türkmen', 'Iňlis', 'Rus'];
        foreach ($languages as $language) {
            Language::create(['name' => $language]);
        }
    }
}