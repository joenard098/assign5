<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Protacio',
                'address' => 'Ligua',
                'phone' => '0909098779090',
                'capitalization' => 24000,
                'loan' => 11000
            ],
            [
                'name' => 'Tayayang',
                'address' => 'Amihan',
                'phone' => '09096439',
                'capitalization' => 45000,
                'loan' => 310000
            ],
            [
                'name' => 'LOKOKO',
                'address' => 'Marine',
                'phone' => '09090488565',
                'capitalization' => 56000,
                'loan' => 590000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
