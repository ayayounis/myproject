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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_on')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('delivared_at')->nullable();
            $table->integer('restaurant_id')->unsigned();
            $table->integer('driver_id')->unsigned();
            $table->string('customer_name');
            $table->integer('customer_number')->unsigned();
            $table->string('status');
            $table->text('Item');
            $table->timestamps();
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('driver_id')->references('id')->on('drivers');
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
