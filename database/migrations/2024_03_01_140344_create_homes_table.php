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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('carousel_image_1');
            $table->string('subtitle_carousel_1');
            $table->string('title_carousel_1');
            $table->string('carousel_image_2');
            $table->string('subtitle_carousel_2');
            $table->string('title_carousel_2');
            $table->string('title_content_advantages');
            $table->string('subtitle_content_advantages_text');
            $table->string('list_advantages');
            $table->string('list_benefits');
            $table->string('list_content_benefits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
