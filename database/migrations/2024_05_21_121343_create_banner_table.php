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
        Schema::create('nhom06', function (Blueprint $table) {
            $table->id()->autoIncrement()->unsigned()->primary();
            $table->string('name', 1000)->nullable(false);
            $table->string('link', 1000)->nullable(false);
            $table->integer('sort_order')->unsigned()->default(1);
            $table->string('position', 50)->nullable(false);
            $table->string('description', 255)->nullable();
            $table->integer('created_by')->unsigned()->nullable(false);
            $table->integer('update_by')->unsigned()->nullable();
            $table->tinyInteger('status', false, true)->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhom06');
    }
};
