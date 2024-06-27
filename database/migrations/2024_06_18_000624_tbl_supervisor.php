<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Schema::create('coaches', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('firstname')->unique();
        //     $table->string('lastname');
        //     $table->string('position');
        //     $table->string('Supervisor')->nullable()->default('Donna Jane D. Rojo');
        //     $table->unsignedBigInteger('contact');
        //     $table->string('department_name');
        //     $table->foreign('department_name')->references('department_name')->on('departments')->onDelete('cascade');
        //     $table->string('address');
        //     $table->string('image');
        //     $table->timestamps();
        // });
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->unique();
            $table->string('lastname');
            $table->string('position');
            $table->string('Supervisor')->nullable()->default('Donna Jane D. Rojo');
            $table->unsignedBigInteger('contact');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->string('address');
            $table->string('image');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('coaches');
    }
};
