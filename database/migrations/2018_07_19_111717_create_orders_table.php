<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('orders');
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_num');

            $table->integer('user_id')->unsigned()->comment('Customer id');


            $table->integer('driver_id')->unsigned();

            $table->enum('skip_by_client', [0, 1])->default(0)->comment('If skip by client and driver will check');

            $table->integer('orderstatus_id')->unsigned()->default(App\Models\Order\Order::JUST_ORDERED);

            $table->string('user_comments')->nullable();

            $table->enum('is_read_laundry', [0, 1])->default(0);
            $table->enum('is_read_admin', [0, 1])->default(0);

            $table->enum('payment_method', ['paytabs', 'cod', 'pos']);

            $table->integer('coupon_id')->unsigned()->nullable();
            $table->double('discount')->default(0.00);
            $table->enum('discount_type', ['percentage', 'fixed'])->nullable();
            $table->double('subtotal');
            $table->double('delivery_charges');
            $table->double('sorting_fee')->default(0)->comment('Order add fee from SW');
            $table->double('laundry_total_price')->default(0);
            $table->double('total');
            $table->double('paid')->default(0);

            $table->dateTime('pickup_time');
            $table->dateTime('delivery_time');

            $table->longText('address');
            $table->point('lat_lng');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('orders', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('driver_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('orderstatus_id')->references('id')->on('orderstatuses')->onDelete('cascade');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
