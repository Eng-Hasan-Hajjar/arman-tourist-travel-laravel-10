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
        Schema::create('arman_lakes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->string('image');
            $table->date('date');

            $table->unsignedBigInteger('arman_id');
            $table->foreign('arman_id')->references('id')->on('armen');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arman_lakes');
    }
};