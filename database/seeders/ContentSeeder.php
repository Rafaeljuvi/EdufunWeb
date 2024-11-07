<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use App\Models\ContentModel;
use App\Models\WriterModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Http;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $users = WriterModel::all();
        $category = CategoryModel::all();
        
        $imgArr = [
            'images/data-sciencea.png',
            'images/data_scienceb.png',
            'images/data_sciencec.png',
            'images/network1.jpg',
            'images/network2.jpg',
            'images/network3.jpg',
        ];

        $titleArr = [
            "Harnessing Data Science for Business Growth: Key Techniques and Tools",
            "The Role of Machine Learning in Data Science: Applications and Innovations",
            "From Data Wrangling to Visualization: A Comprehensive Guide to Data Science Workflows",
            "The Role of Encryption in Safeguarding Digital Communications",
            "Mitigating Network Vulnerabilities: Proactive Approaches for Enhanced Cyber Defense",
            "Top Strategies for Protecting Against Advanced Cyber Threats in 2024",
        ];

        $slugArr = [
            "data-science-big-data-predictive-analytics",
            "data-science-artificial-intelligence-solutions",
            "data-wrangling-to-visualization-guide",
            "mitigating-network-vulnerabilities-cyber-defense",
            "role-of-encryption-in-digital-communications",
            "advanced-cyber-threat-protection-strategies"
        ];

        for ($i = 0; $i < 6; $i++) {
            
            ContentModel::create([
                'writers_id' => $users->random()->id, 
                'category_id' => $category->random()->id, 
                'title' => $titleArr[$i], 
                'slug' => $slugArr[$i],
                'body' => $faker->paragraphs(3, true), 
                'image' => $imgArr[$i],
                'view_count' => rand(0, 100),
            ]);
        }
    }

}