<?php

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
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
            App\Skill::create([
                'name' => $faker->unique()->realText(15),
                'type' => $faker->realText(15),
                'rank' => $faker->numberBetween(150, 300),
                'logo' => $faker->url()
            ]);
        }
    }
}
