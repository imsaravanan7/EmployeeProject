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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Gender');
            $table->date('Dob');
            $table->string('Address');
            $table->biginteger('Mobile')->unique();
            $table->string('Email')->unique();
            $table->unsignedBigInteger('Department');
            $table->foreign('Department')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('Designation');
            $table->foreign('Designation')->references('id')->on('designations')->onDelete('cascade');
            $table->date('Doj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
