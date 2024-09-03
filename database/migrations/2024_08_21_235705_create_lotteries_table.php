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
        Schema::create('status_lotteries', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('lotteries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('detail');
            $table->text('amount');
            $table->string('number_range');
            $table->string('winner')->nullable();
            $table->date('date')->nullable();
            $table->integer('user_id');
            $table->unsignedBigInteger('status_lottery_id')->default(1);
            $table->foreign('status_lottery_id')->references('id')->on('status_lotteries')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_lotteries');
        Schema::dropIfExists('lotteries');
    }
};