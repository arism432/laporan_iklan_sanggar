<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataIklan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('data_iklan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('daftar_ads', 15);
            $table->integer('reach');
            $table->integer('amount_spent');
            $table->integer('cpm');
            $table->integer('ctrl_all');
            $table->integer('cost_per_outbound_click');
            $table->integer('outbound_click');
            $table->integer('messaging_conversation');
            //
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
        //
        Schema::dropIfExists('data_iklan');
    }
}
