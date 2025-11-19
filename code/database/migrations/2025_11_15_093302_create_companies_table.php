<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->string('name');
            $table->string('license_number')->nullable();
            $table->string('tax_code')->nullable();
            $table->string('address');
            $table->string('ward_id');
            $table->string('phone');
            $table->string('email');
            $table->string('logo');
            $table->decimal('commission_rate')->comment('tỉ lệ hoa hồng cho platform');
            $table->decimal('total_drivers');
            $table->decimal('total_vehicles');
            $table->decimal('total_trips');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
