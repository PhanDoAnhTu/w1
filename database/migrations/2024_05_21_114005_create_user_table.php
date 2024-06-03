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
            $table->string('name', 255)->nullable(false);
            $table->string('email', 255)->unique()->nullable(false);
            $table->string('phone', 255)->nullable(false);
            $table->string('username', 255)->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('image', 255)->nullable(false);
            $table->string('roles', 50)->nullable(false);
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
