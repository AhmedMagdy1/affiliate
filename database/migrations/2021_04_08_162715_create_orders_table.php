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
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('client_name');
            $table->string('client_phone');
            $table->bigInteger('client_governorate_id')->unsigned();
            $table->foreign('client_governorate_id')->references('id')->on('governorates');
            $table->bigInteger('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->bigInteger('order_status_id')->unsigned();
            $table->foreign('order_status_id')->references('id')->on('order_statuses');
            $table->float('price');
            $table->float('commission');
            $table->string('commercial_activities');
            $table->text('notes');
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
        Schema::dropIfExists('orders');
    }
}
