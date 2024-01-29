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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('section');
            $table->string('title');
            $table->mediumText('content1');
            $table->string('title2')->nullable();
            $table->mediumText('content2')->nullable();
            $table->string('title3')->nullable();
            $table->mediumText('content3')->nullable();
            $table->string('title4')->nullable();
            $table->string('item1')->nullable();
            $table->string('item2')->nullable();
            $table->string('item3')->nullable();
            $table->string('item4')->nullable();
            $table->string('item5')->nullable();
            $table->string('item6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
