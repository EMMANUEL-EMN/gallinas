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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('excerpt');
            $table->mediumText('content1');
            $table->string('title2')->nullable();
            $table->mediumText('content2')->nullable();
            $table->string('title3')->nullable();
            $table->mediumText('content3')->nullable();
            $table->string('title4')->nullable();
            $table->mediumText('content4')->nullable();
            $table->string('title5')->nullable();
            $table->mediumText('content5')->nullable();
            $table->string('author')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
