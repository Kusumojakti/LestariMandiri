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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('faktur_id')->index();
            $table->foreign('faktur_id')->references('id')->on('fakturs')->onDelete('cascade');
            $table->string('kodeBrg');
            $table->foreign('kodeBrg')->references('kodeBrg')->on('barangs')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
