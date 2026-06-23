<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('school_statistics', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->integer('total');
            $table->string('color')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('school_statistics');
    }
};
