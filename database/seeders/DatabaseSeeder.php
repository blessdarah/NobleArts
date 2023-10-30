<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        if(App::environment('production')) {
            User::create([
                'email' => 'super-admin@naec.cm',
                'password' => Hash::make('testUser'),
                'name' => 'Super Admin'
            ]);
        } else {

            $this->call([
                TagSeeder::class,
                CategorySeeder::class,
                UserSeeder::class,
                ServiceSeeder::class,
                EventSeeder::class,
                ProjectSeeder::class,
                UpdateSeeder::class,
                TestimonialSeeder::class,
                FaqSeeder::class,
                PartnerSeeder::class,
                TeamMemberSeeder::class,
                PostSeeder::class,
                ContactMessageSeeder::class,
                InvoiceSeeder::class
            ]);
        }
    }
}
