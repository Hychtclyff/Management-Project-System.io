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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('project_manager')->nullable();
            $table->string('section')->default('Planing');
            $table->string('status')->default('on going');
            $table->string('role')->default('Web Developers');
            $table->string('image_path')->nullable();
            $table->string('file_path')->nullable();
            $table->longText('description')->nullable();
            $table->date('due_date')->nullable();
            $table->date('start_at')->nullable();
            $table->date('date_complate')->nullable();
            $table->string('sponsor')->nullable();
            $table->text('messages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
