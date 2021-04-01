<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Intake;

class IntakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $intakes = [
            [
                'shippingmethod' => 'eco',
                'customername' => 'Client',
                'barcode' => 'TBA155499926201',
                'description' => 'PART',
                'shippingweight' => 1.50,
                'pickup' => 'Highway',
                'location' => '0067',
                'price' => 102.45,
                'week' => 8,
                'Box' => 'Unknown',
                'status' => 'New',
            ]
        ];

        foreach ($intakes as $key => $value) {
            Intake::create($value);
        }
    }
}
