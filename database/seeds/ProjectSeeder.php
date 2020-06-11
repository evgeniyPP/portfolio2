<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 5; $i++) {
            App\Project::create([
                'name' => $faker->unique()->realText(15),
                'stack' => $faker->realText(15),
                'description' => $faker->realText(150),
                'github_link' => $faker->url(),
                'preview_link' => $faker->url(),
                'image_url' => $faker->imageUrl()
            ]);
        }
    }
}
