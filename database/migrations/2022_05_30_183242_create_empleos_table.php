<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("empleosDisponibles");
            $table->string("primerSegundoNombre");
            $table->string("primerSegundoApellido");
            $table->string("nacionalidad");
            $table->date("fechaDeNacimiento");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("email");
            $table->string("carta_path");
            $table->string("cv_path");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleos');
    }
};
