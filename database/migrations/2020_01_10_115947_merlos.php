<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Merlos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {

            $table->increments('idCliente');
                $table->string('NombreComercial', 250)->required();
                $table->string('RazonSocial', 250)->required();
                $table->string('Nif', 15)->required();
                $table->string('Direccion', 250)->nullable();
                $table->string('Poblacion', 100)->nullable();
                $table->string('CodPostal', 15)->nullable();
                $table->string('Provincia', 50)->nullable();
                $table->string('IdPais', 50)->nullable();
                $table->string('Email', 150)->nullable();
                $table->string('Telefono', 15)->nullable();
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
    }
}
