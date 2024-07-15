<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->pluck('id')->toArray();
        $timestamp = Carbon::now();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'title' => "Book Title $i",
                'thumbnail' => "https://picsum.photos/200/300",
                'author' => "Author $i",
                'publisher' => "Publisher $i",
                'publication' => $timestamp,
                'price' => rand(10, 100),
                'quantity' => rand(1, 50),
                'category_id' => $categories[array_rand($categories)],
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ]);
        }
    }
}
