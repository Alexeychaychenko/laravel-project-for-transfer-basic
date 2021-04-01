<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->float('airmailprice');
            $table->float('ecoprice');
            $table->float('seafreightfactor');
            $table->float('seafreightprice');
            $table->float('srdrate');
            $table->float('eurorate');
            $table->float('giftcardrate');
            $table->float('orderrate');
            $table->float('seafreightrate');
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
        Schema::dropIfExists('setting_tables');
    }
}
