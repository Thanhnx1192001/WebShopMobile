<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('order_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->longText('address');
            $table->timestamps();
            $table->softDeletes();

            // id int [pk]
            // orders_id int
            // user_id int
            // fullname varchar
            // email varchar
            // phone_number varchar
            // address varchar
            // note varchar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_users');
    }
}
