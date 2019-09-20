<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaundryUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('laundry_id')->unsigned()->index();
            $table->foreign('laundry_id')->references('id')->on('laundries')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('relation', ['owner', 'driver'])->default('driver');
            $table->multiPolygon('driver_area')->nullable();
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
        Schema::drop('laundry_user');
    }
}
