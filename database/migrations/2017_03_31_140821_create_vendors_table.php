<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->foreign('id')->references('id')->on('users');
            $table->integer('balance');
            $table->integer('org_id')->unsigned();
            $table->foreign('org_id')->references('id')->on('orgs');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
