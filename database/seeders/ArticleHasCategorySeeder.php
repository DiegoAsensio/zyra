<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleHasCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles_have_categories')->insert([
            [
                'article_fk' => 1,
                'category_fk' => 3,
            ],
            [
                'article_fk' => 1,
                'category_fk' => 4,
            ],
            [
                'article_fk' => 2,
                'category_fk' => 4,
            ],
            [
                'article_fk' => 3,
                'category_fk' => 4,
            ],
            [
                'article_fk' => 4,
                'category_fk' => 1,
            ],
            [
                'article_fk' => 4,
                'category_fk' => 3,
            ],
            [
                'article_fk' => 5,
                'category_fk' => 1,
            ],
            [
                'article_fk' => 5,
                'category_fk' => 4,
            ],
            [
                'article_fk' => 6,
                'category_fk' => 2,
            ],
        ]);
    }
}
