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
        Schema::create('reservations', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')-> references('id')-> on('users')-> onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')-> references('id')-> on('cars')-> onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('pick_up_location');
            $table->foreign('pick_up_location')-> references('id')-> on('districts')-> onDelete('cascade')->onUpdate('cascade');
            $table->date('pick_up_date');
            $table->string('return_location');
            $table->date('return_date');
            $table -> integer('days_num');
            $table -> string('f_name');
            $table -> string('l_name');
            $table -> string('email');
            $table -> integer('phone');
            $table -> string('add_info')->nullable();
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
        Schema::dropIfExists('reservations');
    }
};
