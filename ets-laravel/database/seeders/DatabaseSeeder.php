<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Article;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'dr. Sutomo',
            'slug' => 'sutomo'
        ]);

        Category::create([
            'name' => 'dr. Santoso',
            'slug' => 'santoso'
        ]);

        Category::create([
            'name' => 'dr. Budi',
            'slug' => 'budi'
        ]);

        Article::factory(20)->create();
    }

}
