<?php

namespace Database\Seeders;

use App\Models\WriterModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $avatarArray = [
            'images/stitch.jpeg',
            'images/emily.jpg',
            'images/adam.jpg'
        ];

        $nameArr = [
            'Stitch Jr.',
            'Emily Dior Regan',
            'Adam Luckianto'
        ];

        $emailArr =[
            'stitch@gmail.com',
            'Emily.Regan@gmail.com',
            'adam.luckianto@gmail.com'
        ];
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 3; $i++) {
            $slug = Str::slug($nameArr[$i]);
            WriterModel::create([
                'name' => $nameArr[$i],
                'email' => $emailArr[$i],
                'slug' => $slug,
                'avatar' => $avatarArray[$i],
            ]);
        }
    }
}
