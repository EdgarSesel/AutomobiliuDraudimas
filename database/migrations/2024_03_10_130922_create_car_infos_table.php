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
        if (!Schema::hasTable('cars')) {
            Schema::create('cars', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name', 64);
                $table->string('surname', 64);
                $table->string('phone', 16)->nullable()->default(null);
                $table->string('email', 64)->unique()->nullable()->default(null);

            });
        }

        Schema::create('car_infos', function (Blueprint $table) {
            $table->id();
            $table->string('reg_number');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('cars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_infos');
    }
};
