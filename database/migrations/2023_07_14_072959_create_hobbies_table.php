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
        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->TINYTEXT('inform');
            $table->unsignedBigInteger('stage1');
            $table->string('stage2');
            $table->boolean('stage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hobbies');
    }
};
