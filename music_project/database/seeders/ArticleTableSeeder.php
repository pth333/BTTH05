<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<20;$i++){
            Article::create([
                'ma_bviet' => $i+1,
                'tieude' => $faker->sentence(3,true),
                'ten_bhat' => $faker->sentence(5,true),
                'ma_tloai' => $faker->numberBetween(1,5),
                'tomtat' => $faker->paragraph(3,true),
                'noidung' => $faker->paragraph(5,true),
                'ma_tgia' => $faker->numberBetween(1,10),
                'hinhanh' => $faker->imageUrl(680,480, 'animals',true)
            ]);
        }
    }
}
