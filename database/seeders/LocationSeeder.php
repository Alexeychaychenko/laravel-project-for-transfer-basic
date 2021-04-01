<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = [
            [
                'photo' => 'location_default.png',
                'locationname' => 'Kerklpein',
                'shortname' => 'Kerkplein',
                'comments' => 'This is Kerkplein',
                'price' => '123.12',
            ]
        ];

        foreach ($location as $key => $value) {
            Location::create($value);
        }
    }
}
