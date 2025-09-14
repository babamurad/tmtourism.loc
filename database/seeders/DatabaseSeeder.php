<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Tour;
use App\Models\TourGroup;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'bobo',
            'email' => 'bobo@tm.tm',
            'password' => '123123',
            'role' => '1',
        ]);
        User::factory()->create([
            'name' => 'user',
            'email' => 'bobo12@tm.tm',
            'password' => '123123',
            'role' => '0',
        ]);
        User::factory()->create([
            'name' => 'shohrateke',
            'email' => 'shohrateke@tm.tm',
            'password' => '123123',
            'role' => '1',
        ]);

//        Tour::factory(10)->create();
//        TourGroup::factory(30)->create();
//        Customer::factory(50)->create();
//        Booking::factory(40)->create();
    }
}
