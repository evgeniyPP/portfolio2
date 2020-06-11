<?php

use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
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
            App\Link::create([
                'name' => $faker->unique()->realText(15),
                'link' => $faker->realText(15),
                'description' => $faker->realText(150)
            ]);
        }
    }
}
