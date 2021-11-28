<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::factory(10)
            ->create()
            ->each(function($user) use ($faker) {
                Post::factory(rand(1,10))->create(['user_id' => $user->id]);
            });
    }
}
