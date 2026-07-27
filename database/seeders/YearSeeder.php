<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    public function run(): void
    {
        $years = ['1990', '2000', '2010', '2020', '2026'];
        foreach ($years as $year) {
            Year::create(['name' => $year]);
        }
    }
}