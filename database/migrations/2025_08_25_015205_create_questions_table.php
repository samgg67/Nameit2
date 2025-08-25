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
        // Creates the 'questions' table to store quiz questions.
        Schema::create('questions', function (Blueprint $table) {
            // This is the primary key. It's an auto-incrementing unsigned big integer.
            $table->id();

            // A string column to hold the text of the question.
            $table->string('question');

            // A JSON column to store an array of answer options for the question.
            $table->json('options');

            // A string column to store the correct answer.
            $table->string('correct_answer');

            // An enum column to define the difficulty level. It can only be one of the specified values.
            $table->enum('difficulty', ['facil', 'medio', 'dificil'])->default('facil');

            // Adds 'created_at' and 'updated_at' timestamp columns.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverts the migration by dropping the 'questions' table.
        Schema::dropIfExists('questions');
    }
};