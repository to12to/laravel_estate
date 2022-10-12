<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name'           => 'LifeStyle',
                'description'    => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'image'          => 'null',
            ],
            [
                'name'           => 'Loans',
                'description'    => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'image'          => 'null',
            ],
            [
                'name'           => 'Sell',
                'description'    => 'Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'image'          => 'null',
            ],
        ];

        Service::insert($services);
    }
}
