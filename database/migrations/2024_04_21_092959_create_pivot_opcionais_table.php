<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pivot_opcionais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_opcional', 255);
            $table->string('opcional', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pivot_opcionais');
    }
};