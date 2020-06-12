<?php

use App\Skill;
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
        // Main Skills

        Skill::create([
            'name' => 'JavaScript',
            'type' => 'main',
            'rank' => 242,
            'logo' => 'fab fa-js-square'
        ]);

        Skill::create([
            'name' => 'React',
            'type' => 'main',
            'rank' => 184,
            'logo' => 'fab fa-react'
        ]);

        Skill::create([
            'name' => 'Vue',
            'type' => 'main',
            'rank' => 171,
            'logo' => 'fab fa-vuejs'
        ]);

        Skill::create([
            'name' => 'Angular',
            'type' => 'main',
            'rank' => 213,
            'logo' => 'fab fa-angular'
        ]);

        Skill::create([
            'name' => 'Git',
            'type' => 'main',
            'rank' => 169,
            'logo' => 'fab fa-git-alt'
        ]);

        Skill::create([
            'name' => 'PHP',
            'type' => 'main',
            'logo' => 'fab fa-php'
        ]);

        // Side Skills

        Skill::create([
            'name' => 'ES6',
            'type' => 'side',
            'rank' => 248,
            'logo' => 'fab fa-js-square'
        ]);

        Skill::create([
            'name' => 'HTML',
            'type' => 'side',
            'rank' => 262,
            'logo' => 'fab fa-html5'
        ]);

        Skill::create([
            'name' => 'CSS',
            'type' => 'side',
            'rank' => 203,
            'logo' => 'fab fa-css3-alt'
        ]);

        Skill::create([
            'name' => 'Redux',
            'type' => 'side',
            'rank' => 119,
            'logo' => 'fab fa-artstation'
        ]);

        Skill::create([
            'name' => 'npm',
            'type' => 'side',
            'rank' => 235,
            'logo' => 'fab fa-npm'
        ]);

        Skill::create([
            'name' => 'JSON',
            'type' => 'side',
            'rank' => 184,
            'logo' => 'fas fa-cloud'
        ]);

        Skill::create([
            'name' => 'JQuery',
            'type' => 'side',
            'rank' => 179,
            'logo' => 'fas fa-water'
        ]);

        Skill::create([
            'name' => 'Laravel',
            'type' => 'side',
            'logo' => 'fab fa-laravel'
        ]);

        Skill::create([
            'name' => 'TypeScript',
            'type' => 'side',
            'logo' => 'fab fa-tumblr'
        ]);

        Skill::create([
            'name' => 'Node.js',
            'type' => 'side',
            'logo' => 'fab fa-node-js'
        ]);

        Skill::create([
            'name' => 'Svelte',
            'type' => 'side',
            'logo' => 'fab fa-stripe-s'
        ]);

        Skill::create([
            'name' => 'React Native',
            'type' => 'side',
            'logo' => 'fab fa-react'
        ]);
    }
}
