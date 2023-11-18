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
        Schema::create('suka_reseps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resep_id');
            $table->unsignedBigInteger('user_id');
            $table
                ->foreign('resep_id')
                ->references('id')
                ->on('resep_makanans')
                ->onDelete('cascade'); // Atur constraint untuk cascade delete
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // Atur constraint untuk cascade delete
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suka_reseps');
    }
};
