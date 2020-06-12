<?php

use App\Link;
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
        Link::create([
            'name' => 'GitHub',
            'description' => 'Ниже идет список моих коронных проектов. Их код, а также другие проекты вы можете посмотреть в моем Github.',
            'link' => 'https://github.com/evgeniyPP',
            'logo' => 'fab fa-github'
        ]);

        Link::create([
            'name' => 'Codewars',
            'description' => 'У меня хорошая JavaScript база. Это подтверждает 4 кю на Codewars.',
            'link' => 'https://www.codewars.com/users/evgeniy_pp',
            'logo' => 'fas fa-fire'
        ]);

        Link::create([
            'name' => 'Habr',
            'description' => 'Периодически публикуюсь на Хабре. Люблю не только писать код, но и рассказывать об этом другим.',
            'link' => 'https://habr.com/ru/users/evgeniypp',
            'logo' => 'fas fa-heading'
        ]);

        Link::create([
            'name' => 'LinkedIn',
            'description' => 'Пока я не очень активен на LinkedIn. Но стараюсь это исправить.',
            'link' => 'https://www.linkedin.com/in/evgeniypp',
            'logo' => 'fab fa-linkedin'
        ]);

        Link::create([
            'name' => 'PluralSight',
            'description' => 'Здесь я учился и проходил тесты на знание технологий (Skill IQs). Подробнее в профиле.',
            'link' => 'https://app.pluralsight.com/profile/eugene-romanov',
            'logo' => 'fas fa-eye'
        ]);
    }
}
