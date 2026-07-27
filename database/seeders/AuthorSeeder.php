<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Magtymguly',
                'surname' => 'Pyragy',
                'birth_date' => '1724-01-01',
                'death_date' => '1807-01-01',
                'bio' => 'Türkmen klassiki edebiýatynyň beýik akyldar şahyry we türkmen edebi dilini esaslandyryjylaryň biri.'
            ],
            [
                'name' => 'Kerim',
                'surname' => 'Gurbannepesow',
                'birth_date' => '1929-10-18',
                'death_date' => '1988-09-01',
                'bio' => 'Türkmenistanyň halk ýazyjysy, XX asyryň görnükli we söýgüli lirik şahyry.'
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}