<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichers', function (Blueprint $table) {

            $table->bigInteger('id')->unique()->unsigned();
    $table->BigInteger('user')->unsigned();
    $table->foreign('user')->references('id')->on('users');
    $table->string('categori',100);
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
        Schema::dropIfExists('fichers');
    }
}
