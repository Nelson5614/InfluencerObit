<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class InfluencersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('influencers')->insert([
                'profilepicture' => $faker->imageUrl(200, 200, 'people', true, 'Faker', true),
                'name' => $faker->name,
                'location' => $faker->randomElement(['Lesotho', 'South Africa', 'Botswana']),
                'language' => $faker->randomElement(['Sesotho', 'Setswana', 'English']),
                'platforms' => $faker->randomElement(['TikTok', 'Instagram']),
                'followers' => $faker->numberBetween(10000, 1000000),
                'topics' => $faker->words(3, true),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
