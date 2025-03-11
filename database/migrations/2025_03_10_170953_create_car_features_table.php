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
        Schema::create('car_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->boolean('driver_airbag')->default(false);
            $table->boolean('passenger_airbag')->default(false);
            $table->boolean('brake_assist')->default(false);
            $table->boolean('security_alarm')->default(false);
            $table->boolean('traction_control')->default(false);
            $table->boolean('central_locking')->default(false);
            $table->boolean('immobilizer')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};
