<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intakes', function (Blueprint $table) {
            $table->id();
            $table->string('shippingmethod');
            $table->string('customername');
            $table->string('barcode');
            $table->string('description');
            $table->float('shippingweight');
            $table->string('pickup');
            $table->string('location');
            $table->float('price');
            $table->integer('week');
            $table->string('Box');
            $table->string('status');
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
        Schema::dropIfExists('intakes');
    }
}
