<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = [
            [
                'touser' => 1,
                'username' => '',
                'content' => 'You are Welcom! In our site, you can get All survice...',
            ]
        ];

        foreach ($message as $key => $value) {
            Message::create($value);
        }
    }
}
