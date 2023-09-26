<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserTableSeeder::class,
            CompanyTableSeeder::class,
        ]);

        Employee::factory(10)->create(['company_id' => 1]);
        Employee::factory(10)->create(['company_id' => 5]);
        Employee::factory(10)->create(['company_id' => 6]);
        Employee::factory(10)->create(['company_id' => 4]);
    }
}
