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
        Schema::create('pembacaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meteran_id')->constrained('meterans');
            $table->date('tanggal_pembacaan');
            $table->integer('pembacaan_sebelumnya');
            $table->integer('pembacaan_sekarang');
            $table->timestamps();

            $table->foreign('meteran_id')->references('id')->on('meterans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembacaans');
    }
};
