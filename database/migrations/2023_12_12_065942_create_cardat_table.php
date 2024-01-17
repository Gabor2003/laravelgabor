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
        Schema::create('cardat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vasarlas_id');
            $table->foreign('vasarlas_id')->references('id')->on('vasarlas');
            $table->string('nev');
            $table->string('marka');
            $table->integer('evjarat');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardat');
    }
};
