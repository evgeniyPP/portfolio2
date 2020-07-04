<?php

use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\File::create([
            'name' => 'Фотография',
            'filename' => 'avatar.png',
        ]);

        App\File::create([
            'name' => 'Резюме DOCX',
            'filename' => 'resume_petryankin.docx',
        ]);

        App\File::create([
            'name' => 'Резюме PDF',
            'filename' => 'resume_petryankin.pdf',
        ]);
    }
}
