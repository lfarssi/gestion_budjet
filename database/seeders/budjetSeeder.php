<?php

namespace Database\Seeders;

use App\Models\Budjet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class budjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budjet::factory(50)->create();

    }
}
