<?php

namespace Database\Seeders;

use App\Enums\LicenseType;
use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::factory()->create([
            'user_id' => 4,
            'company_id' => 1,
            'license_number' => '1234567890',
            'license_type' => LicenseType::B,
            'license_image' => 'https://images.pexels.com/photos/159045/the-interior-of-the-repair-interior-design-159045.jpeg',
            'id_card_number' => '0112312351243',
            'id_card_front' => 'https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg',
            'id_card_back' => 'https://images.pexels.com/photos/34770298/pexels-photo-34770298.jpeg',
            'rating' => 4.3,
            'total_trips' => 99,
            'total_reviews' => 89
        ]);
    }
}
