<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderstatuses', function (Blueprint $table) {
            Schema::dropIfExists('orderstatuses');
            $table->increments('id');
            $table->string('status');
            $table->string('status_description');
            $table->string('status_description_ar')->nullable();
            $table->string('status_push_message')->nullable();
            $table->string('status_push_message_ar')->nullable();
            $table->string('status_client_email')->nullable();
            $table->string('status_client_email_ar')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderstatuses');
    }
}
