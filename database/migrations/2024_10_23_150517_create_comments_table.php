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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->uuid(column: 'uuid')->unique(); 
            $table->uuid('user_id');
            $table->foreign('user_id')->references('uuid')->on('users')->onDelete('cascade'); 
            $table->uuid('class_id');
            $table->foreign('class_id')->references('uuid')->on('classes')->onDelete('cascade'); 
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
