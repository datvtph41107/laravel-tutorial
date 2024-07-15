<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'fantasy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'adventure',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'romance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'horroor',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'name' => 'children',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ],);
    }
}
