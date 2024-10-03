<?php

namespace Database\Seeders;

use App\Models\Ad;
use Database\Factories\AdFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::factory()->count(100)->create();
    }
}
