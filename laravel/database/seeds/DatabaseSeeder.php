<?php

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
        factory(App\User::class, 50)->create();
        factory(App\Article::class, 10)->create();
        factory(App\Donation::class, 20)->create();
        factory(App\Key::class, 5)->create();
        factory(App\Page::class, 10)->create();
    }
}
