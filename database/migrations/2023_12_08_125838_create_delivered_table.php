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
        Schema::create('delivered', function (Blueprint $table) {
            $table->date('delivery_date');
            $table->date('actual_delivery_date');
            $table->date('acceptance_date');
            $table->string('iar_no');
            $table->integer('item_no');
            $table->string('stock_no');
            $table->string('description');
            $table->string('unit');
            $table->string('dr_no');
            $table->string('check_no');
            $table->string('po_no');
            $table->date('po_date');
            $table->float('po_amount');
            $table->string('pr_no');
            $table->float('price_per_purchase_request');
            $table->string('bur');
            $table->string('remarks');
            $table->timestamps();
        
            $table->foreign('stock_no')->references('stock_no')->on('supplymain')->onDelete('cascade');
            $table->foreign('description')->references('description')->on('supplymain')->onDelete('cascade');
            $table->foreign('unit')->references('unit')->on('supplymain')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
