<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'comment'       => 'very nice real estate agency',
                'name'          => 'ali',
                'image'         => 'testimonial-1.jpeg',
            ],
            [
                'comment'       => 'very fast response from your agents!',
                'name'          => 'mohamad',
                'image'         => 'testimonial-2.jpeg',
            ],
            [
                'comment'       => 'this is the best agency ever',
                'name'          => 'gabriel',
                'image'         => 'testimonial-1.jpeg',
            ],
        ];

        Testimonial::Insert($testimonials);
    }
}
