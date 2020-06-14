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
        App\Project::create([
            'order' => 1,
            'name' => 'Vuex-Map',
            'stack' => 'Javascript',
            'description' => 'Моя мини-библиотека для замены стандартных мапперов Vuex на более продвинутые. Разработчики Vuex одобряют.',
            'github_link' => 'https://github.com/evgeniyPP/vuex-map',
            'preview_link' => 'https://www.npmjs.com/package/vuex-map',
            'image_url' => 'https://hsto.org/webt/-k/u9/qj/-ku9qjjecr6vqbb7uq_od8pyolm.png'
        ]);

        // App\Project::create([
        //     'order' => 7,
        //     'name' => 'MyTutor',
        //     'stack' => 'Svelte, MongoDB, Node.js',
        //     'description' => 'Сеть для общения репетиторов и студентов. Регистрируемся как студент или репетитор и ищем себе подходящего учителя/ученика.',
        //     'github_link' => 'https://github.com/evgeniyPP/mytutor',
        //     'preview_link' => 'https://mytutor.now.sh',
        //     'image_url' => 'https://hsto.org/webt/x7/4y/ig/x74yigksbssgpehneo9jyapmfpi.png'
        // ]);

        App\Project::create([
            'order' => 2,
            'name' => 'Spotlists v2',
            'stack' => 'React, Typescript',
            'description' => 'Давным-давно был создан как проект на Codecademy. Затем обновлен и переписан на Typescipt. Cоздает плейлисты на Spotify.',
            'github_link' => 'https://github.com/evgeniyPP/spotlists',
            'preview_link' => 'https://epp-spotlists.herokuapp.com',
            'image_url' => 'https://hsto.org/webt/mb/wz/q8/mbwzq8mlcxvseydiwjmdjxj78co.png'
        ]);

        App\Project::create([
            'order' => 4,
            'name' => 'Veni, vidi, vici',
            'stack' => 'Nuxt.js, MongoDB, Node.js',
            'description' => 'Блог, который я делал, когда учил NuxtJS. С крутой админ-панелью, где можно редактировать и добавлять посты.',
            'github_link' => 'https://github.com/evgeniyPP/nuxt-blog',
            'preview_link' => 'https://epp-nuxt-blog.herokuapp.com',
            'image_url' => 'https://hsto.org/webt/6t/b_/ks/6tb_ksvn5fmy9poamfxv9bm90he.png'
        ]);

        App\Project::create([
            'order' => 5,
            'name' => 'Movie App',
            'stack' => 'Laravel, Tailwind, TMDB',
            'description' => 'Да, у меня тоже есть сайт, использующий БД с фильмами. Кстати, стэк технологий этого сайта сильно перекликается с этим портфолио.',
            'github_link' => 'https://github.com/evgeniyPP/laravel-movies',
            'preview_link' => 'https://epp-laravel-movie.herokuapp.com',
            'image_url' => 'https://hsto.org/webt/n7/vh/ls/n7vhlsb5mhbbdda-vkyrkfdvpk4.png'
        ]);

        App\Project::create([
            'order' => 6,
            'name' => '5 паттернов отзывчивого веб-дизайна',
            'stack' => 'HTML, CSS (flexbox)',
            'description' => 'Шпаргалка по responsive-дизайну на основе статьи Pete LePage "Приемы отзывчивого веб-дизайна".',
            'github_link' => 'https://github.com/evgeniyPP/5-responsive-patterns',
            'preview_link' => 'https://evgeniypp.github.io/5-responsive-patterns',
            'image_url' => 'https://hsto.org/webt/d5/ah/ub/d5ahubqptts_iuv_deupypoj-li.png'
        ]);

        App\Project::create([
            'order' => 3,
            'name' => '2500 популярных английских слов',
            'stack' => 'Angular 9',
            'description' => 'Тест на знание английских слов. Можно начать заново, продолжить, где остановился и т.п.',
            'github_link' => 'https://github.com/evgeniyPP/macmillan2500',
            'preview_link' => 'https://macmillan2500.now.sh',
            'image_url' => 'https://hsto.org/webt/av/cx/wt/avcxwt8tmqswdjp5g6tvrgrumda.png'
        ]);
    }
}
