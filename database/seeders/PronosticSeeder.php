<?php

namespace Database\Seeders;

use App\Models\Pronostic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PronosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pronostic::factory(5)->create();
    }
}
