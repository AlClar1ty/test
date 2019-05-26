<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjazahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijazahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no')->unique();
            $table->double('ipk');
            $table->integer('ktp_id')->unsigned();
            $table->foreign('ktp_id')->references('id')->on('ktps');
            $table->integer('universitas_id')->unsigned();
            $table->foreign('universitas_id')->references('id')->on('universitas');
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
        Schema::dropIfExists('ijazahs');
    }
}
