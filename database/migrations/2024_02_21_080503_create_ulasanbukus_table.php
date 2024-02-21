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
        Schema::create('Ulasanbuku', function (Blueprint $table) {
            $table->id();
            $table->integer('UserID');
            $table->integer('BukuID');
            $table->text('Ulasan');
            $table->integer('Rating');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasanbukus');
    }
};
