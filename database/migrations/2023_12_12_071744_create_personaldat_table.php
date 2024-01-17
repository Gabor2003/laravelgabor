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
        Schema::create('personaldat', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->integer('kor');
            $table->string('neme');
            $table->string('email',10);
            $table->integer('teloszam');
            $table->string('lakcim',30);

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personaldat');
    }
};
