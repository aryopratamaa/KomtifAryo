<?php

namespace Database\Seeders;

use App\Models\Role;
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

        $role = Role::firstOrCreate(['nama' => 'admin']);

        User::factory()->create([
            'role_id' => $role->id,
            'Nama' => 'Test User',
            'Email' => 'test@example.com',
        ]);
    }
}
