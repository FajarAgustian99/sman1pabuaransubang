<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('principals', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('position')->default('Kepala Sekolah');
            $table->text('message');

            $table->string('photo')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('principals');
    }
};
