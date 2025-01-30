<?php

namespace Database\Seeders;

use App\Models\Trooper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrooperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trooper::factory(20)->create();
    }
}
