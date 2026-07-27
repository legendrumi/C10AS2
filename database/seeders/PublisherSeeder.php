<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        $publishers = ['Türkmen Döwlet Neşirýaty', 'Ylym Neşirýaty'];
        foreach ($publishers as $publisher) {
            Publisher::create(['name' => $publisher]);
        }
    }
}