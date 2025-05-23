<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->uuid('exam_id'); 
            $table->foreign('exam_id')->references('uuid')->on('exams')->onDelete('cascade');
            $table->string('question'); 
            $table->string('type'); 
            $table->json('options')->nullable(); 
            $table->string('answer'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};