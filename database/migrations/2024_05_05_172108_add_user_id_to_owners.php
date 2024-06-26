<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::table('cars')->delete();

        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owners', function (Blueprint $table) {
            //
        });
    }
};
