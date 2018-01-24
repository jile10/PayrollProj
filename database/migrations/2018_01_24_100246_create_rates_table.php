<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount',12,2);
            $table->integer('role_id')->unsigned();
            $table->integer('ratetype_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('ratetype_id')->references('id')->on('ratetypes');
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
        Schema::dropIfExists('rates');
    }
}
