<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->string("phone");
            $table->date('date');
            $table->string("doctor");
            $table->string("message")->nullable();
            $table->string("status");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
