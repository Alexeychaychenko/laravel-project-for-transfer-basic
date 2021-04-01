<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username'=>'Admin',
                'email'=>'admin@outlook.com',
                'role'=>'1',
                'status'=>'1',
                'idcard'=>'admin.png',
                'idcardnumber'=>'123456',
                'firstname'=>'Admin',
                'lastname'=>'Admin',
                'phonenumber'=>'',
                'readmessage'=>0,
                'location'=>'',
                'pickup'=>'KerKplein',
                'address'=>'',
                'password'=>bcrypt('goodjob'),
            ],
            [
                'username'=>'Client',
                'email'=>'client@outlook.com',
                'role'=>'2',
                'status'=>'1',
                'idcard'=>'client.png',
                'idcardnumber'=>'234567',
                'firstname'=>'Client',
                'lastname'=>'Client',
                'phonenumber'=>'',
                'readmessage'=>0,
                'location'=>'',
                'pickup'=>'KerKplein',
                'address'=>'',
                'password'=>bcrypt('goodjob'),
            ],
            [
                'username'=>'Employer',
                'email'=>'employer@outlook.com',
                'role'=>'3',
                'status'=>'1',
                'idcard'=>'employer.png',
                'idcardnumber'=>'345678',
                'firstname'=>'Employer',
                'lastname'=>'Employer',
                'phonenumber'=>'',
                'readmessage'=>0,
                'location'=>'',
                'pickup'=>'KerKplein',
                'address'=>'',
                'password'=>bcrypt('goodjob'),
            ],
            [
                'username'=>'Location Manager',
                'email'=>'location@outlook.com',
                'role'=>'4',
                'status'=>'1',
                'idcard'=>'location.png',
                'idcardnumber'=>'456789',
                'firstname'=>'Location',
                'lastname'=>'Location',
                'phonenumber'=>'',
                'readmessage'=>0,
                'location'=>'',
                'pickup'=>'KerKplein',
                'address'=>'',
                'password'=>bcrypt('goodjob'),
            ],
            [
                'username'=>'Warehouse',
                'email'=>'warehouse@outlook.com',
                'role'=>'5',
                'status'=>'1',
                'idcard'=>'warehouse.png',
                'idcardnumber'=>'567890',
                'firstname'=>'Warehouse',
                'lastname'=>'Warehouse',
                'phonenumber'=>'',
                'readmessage'=>0,
                'location'=>'',
                'pickup'=>'KerKplein',
                'address'=>'',
                'password'=>bcrypt('goodjob'),
            ],
        ];
        
        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
