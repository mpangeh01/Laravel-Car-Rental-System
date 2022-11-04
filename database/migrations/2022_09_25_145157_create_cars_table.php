<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {

            $table->id('car_id');

            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')-> references('id')-> on('categories')-> onDelete('cascade')-> onUpdate('cascade');
            $table->unsignedBigInteger('prov_id');
            $table->foreign('prov_id')-> references('id')-> on('provinces')-> onDelete('cascade')-> onUpdate('cascade');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')-> references('id')-> on('districts')-> onDelete('cascade')-> onUpdate('cascade');
            $table->string('model');
            $table->string('image');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('transmission');
            $table->integer('daily_price');
            $table->string('color');
            $table->string('fuel_type');
            $table->integer('seat_num');
            $table->string('plate_num');

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
        Schema::dropIfExists('cars');
    }
};
