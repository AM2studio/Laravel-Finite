<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAm2FiniteStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('am2_finite_states', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('stateable_id');
            $table->string('stateable_type');
            $table->string('state');
            $table->text('properties');
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
        Schema::drop('am2_finite_states');
    }
}
