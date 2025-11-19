<?php

use App\Enums\LicenseType;
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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('license_number');
            $table->enum('license_type', LicenseType::cases());
            $table->string('license_image');
            $table->string('id_card_number');
            $table->string('id_card_front');
            $table->string('id_card_back');
            $table->decimal('rating', 3);
            $table->unsignedInteger('total_trips');
            $table->unsignedInteger('total_reviews');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
