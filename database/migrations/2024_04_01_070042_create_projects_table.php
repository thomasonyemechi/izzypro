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
            $table->integer('customer_id');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('budget')->default(0);
            $table->string('deadline')->nullable();
            $table->string('category')->nullable();
            $table->string('skills')->nullable();
            $table->string('files')->nullable();
            $table->text('others')->nullable();
            $table->integer('status');
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
