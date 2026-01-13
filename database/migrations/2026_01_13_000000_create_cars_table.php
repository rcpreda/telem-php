<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->string('device_imei')->nullable()->unique();
            $table->string('license_plate')->nullable();
            $table->string('vin')->nullable()->unique();
            $table->integer('year')->nullable();
            $table->string('color')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('status')->default('active');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
