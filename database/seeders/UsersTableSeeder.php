<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Tarek',
                'info'           => 'estgsdsgsd gsdgsdgsdg',
                'phone'          => '71747855',
                'facebook'       => 'https//www.facebook.com/',
                'twitter'        => 'https://www.twitter.com/',
                'instagram'      => 'https://www.instagram.com',
                'linkedin'       => 'https://www.linkedin.com',
                'image'          => 'agent-1.jpeg',
                'email'          => 'tarek@tarek.com',
                'password'       => '$2y$10$7Xn/8bPJ89ypj0cIxwoH9OOXnbK/.9xrLfFh2G4LUSRkw6j7Agn0K',
                'remember_token' => null,
                'created_at'     => '2019-09-24 19:16:02',
                'updated_at'     => '2019-09-24 19:16:02',
            ],
            [
                'id'             => 2,
                'name'           => 'Jad',
                'info'           => 'dsafgsdg testst sdtsdtgfdst',
                'phone'          => '71747855',
                'facebook'       => 'https//www.facebook.com/',
                'twitter'        => 'https://www.twitter.com/',
                'instagram'      => 'https://www.instagram.com',
                'linkedin'       => 'https://www.linkedin.com',
                'image'          => 'agent-2.jpeg',
                'email'          => 'jad@jad.com',
                'password'       => '$2y$10$7Xn/8bPJ89ypj0cIxwoH9OOXnbK/.9xrLfFh2G4LUSRkw6j7Agn0K',
                'remember_token' => null,
                'created_at'     => '2019-09-24 19:16:02',
                'updated_at'     => '2019-09-24 19:16:02',
            ],
            [
                'id'             => 3,
                'name'           => 'Nancy',
                'info'           => 'asdfgsdgd sadfgsddss dsgdsgsdg',
                'phone'          => '71747855',
                'facebook'       => 'https//www.facebook.com/',
                'twitter'        => 'https://www.twitter.com/',
                'instagram'      => 'https://www.instagram.com',
                'linkedin'       => 'https://www.linkedin.com',
                'image'          => 'agent-4.jpeg',
                'email'          => 'nancy@nancy.com',
                'password'       => '$2y$10$7Xn/8bPJ89ypj0cIxwoH9OOXnbK/.9xrLfFh2G4LUSRkw6j7Agn0K',
                'remember_token' => null,
                'created_at'     => '2019-09-24 19:16:02',
                'updated_at'     => '2019-09-24 19:16:02',
            ],
        ];

        User::insert($users);

    }
}
