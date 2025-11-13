<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->integer('bookingId', true);
            $table->integer('tourId')->index('tourId');
            $table->integer('userId')->index('userId');
            $table->string('address')->nullable();
            $table->string('fullName', 150)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('phoneNumber', 20)->nullable();
            $table->integer('numAdults')->nullable()->default(1);
            $table->integer('numChildren')->nullable()->default(0);
            $table->double('totalPrice');
            $table->timestamp('bookingDate')->useCurrent();
            $table->string('bookingStatus', 50)->nullable()->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_booking');
    }
}
