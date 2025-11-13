<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_promotions', function (Blueprint $table) {
            $table->integer('promotionId', true);
            $table->string('name', 150)->nullable();
            $table->text('description')->nullable();
            $table->double('discount')->nullable()->default(0);
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->boolean('status')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_promotions');
    }
}
