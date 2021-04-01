<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slide;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = [
            [
                'imagename' => '900omslag.png',
            ],
            [
                'imagename' => '900omslagbezorging-new.png',
            ],
            [
                'imagename' => '900bannerfb2020-new.png',
            ]
        ];

        foreach ($slide as $key => $value) {
            Slide::create($value);
        }
    }
}
