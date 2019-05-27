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
        // $this->call(UsersTableSeeder::class);

        factory(App\Property::class, 5)->create();
        factory(App\Contact::class, 5)->create();
        factory(App\Feature::class, 5)->create();
        factory(App\Location::class, 5)->create();
        factory(App\Image::class, 5)->create();
        factory(App\Video::class, 5)->create();
        factory(App\Tag::class, 5)->create();
        factory(App\Employee::class, 5)->create();
        factory(App\PropertyEmployee::class, 5)->create();
        factory(App\User::class, 5)->create();
        factory(App\UserEmployee::class, 5)->create();
        factory(App\UserDetail::class, 5)->create();
    }
}
