<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create()->each(function ($user){
            Post::factory(6)->make()->each(function ($post) use ($user){
                $user->Posts()->save($post);
            });
        });
    }
}
