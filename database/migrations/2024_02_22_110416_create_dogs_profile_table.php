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
        Schema::create('dogs_profile', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('main_image');
            $table->string('main_video');
            $table->string('other_image1');
            $table->string('other_image2');
            $table->string('other_image3');
            $table->string('other_image4');
            $table->string('pedigree_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs_profile');
    }
};
