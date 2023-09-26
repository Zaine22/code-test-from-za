<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'Za Company',
            'email' => 'zacompany@gmail.com',
            'logo' => '',
            'website' => 'www.za.com.mm',
        ]);
    }
}
