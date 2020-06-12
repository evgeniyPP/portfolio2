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
        /*
        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 4; $i++) {
            App\Link::create([
                'name' => $faker->unique()->realText(15),
                'link' => $faker->url(),
                'description' => $faker->realText(100)
            ]);
        }
        */

        App\Link::create([
            'name' => 'GitHub',
            'description' => 'Ниже идет список моих коронных проектов. Их код, а также другие проекты вы можете посмотреть в моем Github.',
            'link' => 'https://github.com/evgeniyPP',
            'logo' => 'fab fa-github'
        ]);

        App\Link::create([
            'name' => 'Codewars',
            'description' => 'У меня хорошая JavaScript база. Это подтверждает 4 кю на Codewars.',
            'link' => 'https://www.codewars.com/users/evgeniy_pp',
            'logo' => 'fas fa-fire'
        ]);

        App\Link::create([
            'name' => 'Habr',
            'description' => 'Периодически публикуюсь на Хабре. Люблю не только писать код, но и рассказывать об этом другим.',
            'link' => 'https://habr.com/ru/users/evgeniypp',
            'logo' => 'fas fa-heading'
        ]);

        App\Link::create([
            'name' => 'LinkedIn',
            'description' => 'Пока я не очень активен на LinkedIn. Но стараюсь это исправить.',
            'link' => 'https://github.com/evgeniyPP',
            'logo' => 'fab fa-linkedin'
        ]);
    }
}
