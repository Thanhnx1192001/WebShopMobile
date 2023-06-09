<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manufacturer_id')->unsigned();
            $table->string('main_img');
            $table->string('title');
            $table->string('color');
            $table->string('memory');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('quantity');
            $table->longText('description_summary');
            $table->longText('description_detailed');
            $table->timestamps();
            $table->softDeletes();
        });
        // id int [pk]
        // manufacturer_id int
        // title varchar
        // color varchar
        // // bo nho dt
        // memory varchar
        // price int
        // discount int
        // quantity int
        // //hinh anh
        // //mo ta
        // description_summary varchar
        // description_detailed varchar
        // created_at datetime
        // updated_at datetime
        // delete_at datetime
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
