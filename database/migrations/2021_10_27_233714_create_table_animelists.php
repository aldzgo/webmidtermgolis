<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAnimelists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Animelists', function (Blueprint $table) {
            $table->id();
            $table->string('AnimeTitle', 100)->nullable();
            $table->string('Genre', 50)->nullable();
            $table->string('Episodes', 50)->nullable();
            $table->date('Released')->nullable();
            $table->string('Description', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Animelists');
    }
}
