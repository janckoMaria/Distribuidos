<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tarjeta_id')->unsigned();
            $table->integer('cajero_id')->unsigned();
            $table->decimal('monto',8,2);
            $table->string('tipo',10);
            $table->dateTime('fecha_hora');
            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
            $table->foreign('cajero_id')->references('id')->on('cajeros');
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
        Schema::dropIfExists('transacciones');
    }
}
