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
        Schema::table('vouchers', function (Blueprint $table) {
            $table->text('reject_numbers')->nullable();
        });
    }

    public function down()
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->dropColumn('reject_numbers');
        });
    }
};
