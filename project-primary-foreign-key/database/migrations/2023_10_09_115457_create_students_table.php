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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->integer('age');
            $table->string('email', 50)->nullable()->unique();
            $table->string('address');
            $table->string('city');
            $table->string('phone');
            $table->string('password');
            $table->unsignedBigInteger('mentor_id')->nullable(); // Add mentor_id column
            $table->timestamps();

            $table->foreign('mentor_id')
                ->references('id')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('set null'); // Set mentor_id to null if mentor student is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
