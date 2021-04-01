<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SettingTable;

class CreateSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            [
                'airmailprice' => 1.0,
                'ecoprice' => 1.0,
                'seafreightfactor' => 1.0,
                'seafreightprice' => 1.0,
                'srdrate' => 1.0,
                'eurorate' => 1.0,
                'giftcardrate' => 1.0,
                'orderrate' => 1.0,
                'seafreightrate' => 1.0,
            ]
        ];

        foreach ($setting as $key => $value) {
            SettingTable::create($value);
        }
    }
}
