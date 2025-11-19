<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Enums\UserType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'phone' => '0378080363',
            'dob' => '1995-01-01',
            'email' => 'admin@lacgo.com',
            'type' => UserType::ADMIN,
            'status' => UserStatus::ACTIVE,
        ]);
        User::factory()->create([
            'name' => 'MOD User',
            'phone' => '0123456789',
            'dob' => '2000-12-31',
            'email' => 'mod@lacgo.com',
            'type' => UserType::MOD,
            'status' => UserStatus::ACTIVE,
        ]);
        User::factory()->create([
            'name' => 'Company User',
            'phone' => '0123456789',
            'dob' => '2000-12-31',
            'email' => 'company@lacgo.com',
            'type' => UserType::COMPANY,
            'status' => UserStatus::ACTIVE,
        ]);
        User::factory()->create([
            'name' => 'Driver User',
            'phone' => '0123456789',
            'dob' => '2000-12-31',
            'email' => 'driver@lacgo.com',
            'type' => UserType::DRIVER,
            'status' => UserStatus::ACTIVE,
        ]);
        User::factory()->create([
            'name' => 'Customer User',
            'phone' => '0123456789',
            'dob' => '2000-12-31',
            'email' => 'customer@lacgo.com',
            'type' => UserType::CUSTOMER,
            'status' => UserStatus::ACTIVE,
        ]);
    }
}
