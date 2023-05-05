<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('tr_id');
            $table->timestamps();
            $table->integer('quantity');
            $table->date('date')->format('Y-m-d');
            $table->unique(array('tr_id'));
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->nullable()->references('id')->on('user')->onDelete('cascade');
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->nullable()->references('id')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
