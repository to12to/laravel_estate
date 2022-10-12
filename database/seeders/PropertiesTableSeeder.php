<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Property;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'name'          => 'first property',
                'location'      => 'zalka',
                'description'   => 'asfgsdgdfh sdfghsdfgsdg',
                'price'         => '1500',
                'type'          => 'house',
                'status'        => 'sale',
                'area'          => '120',
                'beds'          => '2',
                'baths'         => '2',
                'garage'        => '2',
                'images'        => 'property-1.jpg',
                'video'         => 'null',
                'latitude'      => '1231245',
                'longitude'     => '12432525',
                'agent_id'      => '1',
            ],
                [
                    'name'          => 'second property',
                    'location'      => 'antelias',
                    'description'   => 'asfgsdgdfh sdfghsdfgsdg',
                    'price'         => '1800',
                    'type'          => 'appartment',
                    'status'        => 'rent',
                    'area'          => '120',
                    'beds'          => '2',
                    'baths'         => '2',
                    'garage'        => '2',
                    'images'        => 'property-2.jpg',
                    'video'         => 'null',
                    'latitude'      => '1231245',
                    'longitude'     => '12432525',
                    'agent_id'      => '1',
                ],
                    [
                        'name'          => 'third property',
                        'location'      => 'koura',
                        'description'   => 'asfgsdgdfh sdfghsdfgsdg',
                        'price'         => '10000',
                        'type'          => 'villa',
                        'status'        => 'rent',
                        'area'          => '300',
                        'beds'          => '2',
                        'baths'         => '2',
                        'garage'        => '2',
                        'images'        => 'property-3.jpg',
                        'video'         => 'null',
                        'latitude'      => '1231245',
                        'longitude'     => '12432525',
                        'agent_id'      => '2',
                    ],
                        [
                            'name'          => 'fourth property',
                            'location'      => 'nabatieh',
                            'description'   => 'asfgsdgdfh sdfghsdfgsdg',
                            'price'         => '1500',
                            'type'          => 'house',
                            'status'        => 'sale',
                            'area'          => '120',
                            'beds'          => '2',
                            'baths'         => '2',
                            'garage'        => '2',
                            'images'        => 'property-4.jpg',
                            'video'         => 'null',
                            'latitude'      => '1231245',
                            'longitude'     => '12432525',
                            'agent_id'      => '3',
                        ],
                            [
                                'name'          => 'fifth property',
                                'location'      => 'zahle',
                                'description'   => 'asfgsdgdfh sdfghsdfgsdg',
                                'price'         => '154',
                                'type'          => 'house',
                                'status'        => 'sale',
                                'area'          => '154',
                                'beds'          => '2',
                                'baths'         => '2',
                                'garage'        => '2',
                                'images'        => 'property-5.jpg',
                                'video'         => 'null',
                                'latitude'      => '1231245',
                                'longitude'     => '12432525',
                                'agent_id'      => '2',
                            ],
                                [
                                    'name'          => 'sixth property',
                                    'location'      => 'biakout',
                                    'description'   => 'asfgsdgdfh sdfghsdfgsdg',
                                    'price'         => '164',
                                    'type'          => 'house',
                                    'status'        => 'sale',
                                    'area'          => '120',
                                    'beds'          => '2',
                                    'baths'         => '2',
                                    'garage'        => '2',
                                    'images'        => 'property-6.jpg',
                                    'video'         => 'null',
                                    'latitude'      => '1231245',
                                    'longitude'     => '12432525',
                                    'agent_id'      => '3',
                                ],

        ];

        Property::Insert($properties);
    }
}
