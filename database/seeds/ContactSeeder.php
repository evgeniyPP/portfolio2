<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contact::create([
            'name' => 'по телефону',
            'link' => 'https://wa.me/79853858146',
            'text' => '8-985-385-81-46',
        ]);

        App\Contact::create([
            'name' => 'в Telegram',
            'link' => 'https://t.me/evgeniy_pp',
            'text' => '@evgeniyPP',
        ]);

        App\Contact::create([
            'name' => 'по e-mail',
            'link' => 'mailto:aysanru@gmail.com',
            'text' => 'aysanru@gmail.com',
        ]);
    }
}
