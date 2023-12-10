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
        Schema::create('supplymain', function (Blueprint $table) {
            $table->string('stock_no');
            $table->string('description');
            $table->string('unit');
            $table->integer('balance_before');
            $table->integer('delivered');
            $table->integer('issued');
            $table->integer('balance_after');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplymain');
    }
};
