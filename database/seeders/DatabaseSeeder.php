<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Consent;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::factory()->create([
            'name' => 'Admin 2',
            'email' => 'admin2@example.com',
            'password' => bcrypt('password'),
        ]);

        Consent::create([
            'consent_text' => 'Cookies are necessary for this website to function properly, for performance measurement, and to provide you with the best experience. {new_line} By continuing to access or use this site, you acknowledge and consent to our use of cookies in accordance with our {terms} and {privacy}.',
            'status' => 'active',
            'version' => '1.0',
            'created_by' => $user->id,
        ]);

        Consent::create([
            'consent_text' => 'This website uses cookies to ensure essential site functionality, analyze performance, and enhance your browsing experience. {new_line} By continuing to use or navigate our site, you agree to our use of cookies as outlined in our {terms} and {privacy}.',
            'status' => 'deactive',
            'version' => '2.0',
            'created_by' => $user2->id,
        ]);
    }
}
