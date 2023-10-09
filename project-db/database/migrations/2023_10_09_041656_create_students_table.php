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
            // $table->id(); // by default primary key and auto increment
            $table->integer('student_id'); 
            $table->string('name', 30); //name can be max of 30 characters
            $table->string('email')->unique()->nullable();
            $table->float('percentage', 3, 2)->comment('Students percentage uptop two floating points'); // max of 3 decimal places i.e. 100%, and 2 digits after the decimal point
            $table->primary('student_id');
            $table->string('city')->default('No City');
            $table->integer('age')->unsigned();
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
