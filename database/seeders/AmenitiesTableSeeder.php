<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Amenity;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities=[
            [
                'name'      => 'Balcony',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Deck',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Parking',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Outdoor Kitchen',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Tennis Courts',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Sun Room',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Cable TV',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Internet',
                'property_id'  => '1',
            ],
            [
                'name'      => 'Concrete Flooring',
                'property_id'  => '1',
            ],
        ];

        Amenity::Insert($amenities);
    }
}
