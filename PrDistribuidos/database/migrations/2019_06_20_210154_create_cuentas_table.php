<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('tarjeta_id')->unsigned();
            $table->string('num_cuenta',15);
            $table->string('tipo_cuenta',20);
            $table->decimal('saldo',8,2)->default(0);
            $table->decimal('debito',8,2)->default(0);
            $table->decimal('credito',8,2)->default(0);
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
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
        Schema::dropIfExists('cuentas');
    }
}
