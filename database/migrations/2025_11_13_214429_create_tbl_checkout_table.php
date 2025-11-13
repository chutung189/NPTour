<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_checkout', function (Blueprint $table) {
            $table->integer('checkoutId', true);
            $table->integer('bookingId')->index('bookingId');
            $table->string('paymentMethod', 100)->nullable();
            $table->double('amount')->nullable();
            $table->timestamp('paymentDate')->nullable();
            $table->string('paymentStatus', 10)->nullable()->default('n');
            $table->string('transactionId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_checkout');
    }
}
