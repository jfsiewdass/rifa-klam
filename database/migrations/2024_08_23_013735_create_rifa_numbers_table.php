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
        Schema::create('status_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('rifa_numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->unsignedBigInteger('rifa_id');
            $table->unsignedBigInteger('status_number_id');

            $table->unique(['number', 'rifa_id']);

            $table->foreign('status_number_id')->references('id')->on('status_numbers')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('rifa_id')->references('id')->on('rifas')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_numbers');
        Schema::dropIfExists('rifa_numbers');
    }
};
