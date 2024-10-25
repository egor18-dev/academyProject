<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_exams', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->uuid('user_id');
            $table->uuid('class_id');
            $table->foreign('user_id')->constrained()->onDelete('cascade');
            $table->foreign('class_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_exams');
    }
};