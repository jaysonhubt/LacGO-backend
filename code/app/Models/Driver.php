<?php

namespace App\Models;

use App\Enums\LicenseType;
use Database\Factories\DriverFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    /** @use HasFactory<DriverFactory> */
    use HasFactory, SoftDeletes;

    protected function casts(): array
    {
        return [
            'license_type' => LicenseType::class
        ];
    }
}
