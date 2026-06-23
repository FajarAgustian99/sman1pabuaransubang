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
        Schema::create('header_settings', function (Blueprint $table) {
            $table->id();

            $table->string('school_name');
            $table->string('logo')->nullable();

            $table->string('elearning_text')->default('E-Learning');
            $table->string('elearning_url')->nullable();

            $table->string('ppdb_text')->default('SPMB Online');
            $table->string('ppdb_url')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_settings');
    }
};
