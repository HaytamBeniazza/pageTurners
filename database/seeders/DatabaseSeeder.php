<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Haytam Beniazza',
            'email' => 'beniazza0@gmail.com'
        ]);
         Listing::factory(6)->create([
            'user_id' => $user->id
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create([
        //     'title' => 'laravel Senior Developer',
        //     'tags' => 'laravel, js',
        //     'company' => 'acme',
        //     'location' => 'Boston, Ma',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet',
        // ]);
        // Listing::create([
        //     'title' => 'laravel Jenior',
        //     'tags' => 'java, laragone',
        //     'company' => 'damn',
        //     'location' => 'Dallas, TX',
        //     'email' => 'email@oui.com',
        //     'website' => 'https://www.google.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        // ]);
    }
}
