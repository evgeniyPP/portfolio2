<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(MainSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(FileSeeder::class);
    }
}
