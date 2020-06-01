<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->BigInteger('user')->unsigned();
            $table->foreign('user')->references('id')->on('users');
            $table->BigInteger('comment')->unsigned();
            $table->foreign('comment')->references('id')->on('comments');
            $table->string('message',500)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponds');
    }
}
