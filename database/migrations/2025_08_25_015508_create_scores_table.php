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
        // Creates the 'scores' table.
        Schema::create('scores', function (Blueprint $table) {
            // This is the primary key for the table.
            $table->id();

            // A foreign key that links to the 'id' column on the 'users' table.
            // When a user is deleted, their scores will also be deleted due to onDelete('cascade').
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // An integer column to store the user's score, with a default value of 0.
            $table->integer('score')->default(0);

            // Adds 'created_at' and 'updated_at' timestamp columns.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverts the migration by dropping the 'scores' table.
        Schema::dropIfExists('scores');
    }
};
