<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(budjetSeeder::class);
        $this->call(FonctionSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(CommuneSeeder::class);
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Rachid Tahri',
            'email' => 'rachid@tahri.com',
            'password' => '123456789',
        ]);
    }
}
