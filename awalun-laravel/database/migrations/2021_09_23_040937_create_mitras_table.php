<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->string('email', 100);
            $table->primary('email');

            $table->string('code', 9);
            $table->string('name', 225);
            $table->string('nickname', 50);
            $table->enum('sex',['L','P']);
            $table->text('photo');
            $table->unsignedBigInteger('education');
            $table->foreign('education')->references('id')->on('educations');
            $table->date('birthdate');
            $table->string('profession', 225);
            $table->text('address');
            $table->unsignedBigInteger('vilage');
            $table->foreign('vilage')->references('id')->on('vilages');
            $table->unsignedBigInteger('subdistrict');
            $table->foreign('subdistrict')->references('id')->on('subdistricts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitras');
    }
}
