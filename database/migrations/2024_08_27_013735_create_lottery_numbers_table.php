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

        Schema::create('status_vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lottery_id');
            $table->unsignedBigInteger('day_rate_id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->double('amount');
            $table->string('document');
            $table->string('payment_type');
            $table->string('reference_number');
            $table->string('capture');
            $table->unsignedBigInteger('status_voucher_id')->default(1);
            $table->unsignedBigInteger('bank_id')->default(1);
            $table->boolean('is_winner')->default(false);
            $table->unsignedBigInteger('user_id')->default(1);

            $table->foreign('bank_id')->references('id')->on('banks')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('lottery_id')->references('id')->on('lotteries')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('day_rate_id')->references('id')->on('day_rates')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('status_voucher_id')->references('id')->on('status_vouchers')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('lottery_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->boolean('is_winner')->default(false);
            $table->unsignedBigInteger('lottery_id');
            
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->unsignedBigInteger('status_number_id')->default(1);

            $table->unique(['number', 'lottery_id']);

            $table->foreign('lottery_id')->references('id')->on('lotteries')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('voucher_id')->references('id')->on('vouchers')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('status_number_id')->references('id')->on('status_numbers')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('number_ranges', function (Blueprint $table) {
            $table->id();
            $table->integer('range');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lottery_numbers');
        Schema::dropIfExists('vouchers');
        Schema::dropIfExists('status_numbers');
        Schema::dropIfExists('status_vouchers');
    }
};
