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
            $table->integer('user_id')->unsigned()->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('phone', 255)->nullable(false);
            $table->string('email',255)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('note', 255)->nullable();
            // $table->integer('created_by')->unsigned()->nullable(false);
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
