<?php

namespace Database\Seeders;

use App\Enums\LicenseType;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->create([
            'owner_id' => 3,
            'name' => 'HTX Vận Tải Xanh',
            'license_number' => '001122334455',
            'tax_code' => '001100220033',
            'address' => '123 ABC',
            'ward_id' => 12,
            'phone' => '03456789012',
            'email' => 'xanh@green.com',
            'logo' => 'https://media.istockphoto.com/id/1184567639/vector/ecology-sphere-logo-formed-by-twisted-green-leaves.jpg?s=612x612&w=0&k=20&c=RuhMuEHwiUk50BonfU2yDBpo3IOBa7nywRdY069-TCU=',
            'commission_rate' => 10,
            'total_drivers' => 20,
            'total_vehicles' => 12,
            'total_trips' => 999
        ]);
    }
}
