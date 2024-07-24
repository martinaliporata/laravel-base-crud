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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('image_url', 255);
            $table->string('species', 255);
            $table->integer('weight')->unsigned();
            $table->string('alimentation', 255);
            $table->string('extintion', 255);
            $table->string('colour', 255);
            $table->string('habitat', 255);
            $table->smallInteger('life_duration')->unsigned();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
