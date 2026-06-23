<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_settings', function (
            Blueprint $table
        ) {
            $table->id();

            $table->string('school_name');
            $table->text('description')->nullable();

            $table->string('address')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('working_hours')->nullable();

            $table->string('facebook')->nullable();

            $table->string('instagram')->nullable();

            $table->string('youtube')->nullable();

            $table->integer('copyright_year')
                ->default(date('Y'));

            $table->string('copyright_name')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_settings');
    }
};
