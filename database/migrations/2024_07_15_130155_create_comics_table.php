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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->string('thumb', 200)->nullable();
            $table->tinyInteger('price')->nullable();
            $table->string('series', 100)->nullable();
            $table->dateTime('sale_date')->nullable();
            $table->string('type', 30)->nullable();
            $table->string('artists', 100)->nullable();
            $table->string('writers', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
