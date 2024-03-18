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
        Schema::create('pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('judul-modul');
            $table->string('slug');
            $table->string('modul');
            $table->text('sampul');
            $table->longText('penjelasan-modul');
            $table->longText('kontent-modul');
            $table->string('viedo');
            $table->string('pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelajarans');

    }
};
