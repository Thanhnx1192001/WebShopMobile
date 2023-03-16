<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('note');
            $table->timestamp('order_date');
            $table->integer('payment');
            $table->string('status');

            // id int [pk]
            // note varchar
            // order_date datetime
            // // 1 là tại nhà , 2 là cửa hàng
            // payment int
            // status varchar
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
