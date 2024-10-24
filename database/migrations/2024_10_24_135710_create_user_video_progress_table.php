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
        Schema::create('user_video_progress', function (Blueprint $table) {
            $table->id();
            $table->uuid(column: 'uuid')->unique(); 
            $table->uuid('user_id'); 
            $table->uuid('class_id');
            $table->boolean('watched')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('uuid')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_video_progress');
    }
};
