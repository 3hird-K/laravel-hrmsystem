<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Schema::create('employees', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('fname')->unique();
        //     $table->string('lname');
        //     $table->string('position');
        //     $table->unsignedBigInteger('contact');
        //     $table->string('address');
        //     $table->string('status');
        //     $table->string('Supervisor')->default('Donna Jane D. Rojo');
        //     $table->foreign('Supervisor')->references('Supervisor')->on('coaches')->onDelete('cascade');
        //     $table->date('date_hired')->nullable()->default(now());
        //     $table->string('image');
        //     $table->string('description')->nullable();
        //     $table->timestamps();
        // });
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->unique();
            $table->string('lname');
            $table->string('position');
            $table->unsignedBigInteger('contact');
            $table->string('address');
            $table->string('status');
            $table->unsignedBigInteger('supervisor_id')->nullable()->default(1); // Assuming 1 is the ID of 'Donna Jane D. Rojo'
            $table->foreign('supervisor_id')->references('id')->on('coaches')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_hired')->nullable()->default(now());
            $table->string('image');
            $table->string('description')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
