<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<10;$i++){
            Author::create([
                'ma_tgia' => $i+1,
                'ten_tgia' => $faker->sentence(3,true),
                'hinh_tgia' => $faker->imageUrl(200,200, 'animals',true)
            ]);
        }
    }
}
