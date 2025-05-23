<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->uuid(column: 'uuid')->unique(); 
            $table->uuid('level_id');
            $table->foreign('level_id')->references('uuid')->on('levels')->onDelete('cascade'); 
            $table->string('title');
            $table->longText('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};