<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\estatus;

class CreateParientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parientes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_entidad')->default(5);
            $table->unsignedBigInteger('id_alumno');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('relacion');
            $table->string('sexo');
            $table->enum('id_estatus',[estatus::ACTIVO, estatus::INACTIVO, estatus::ELIMINADO])->default(estatus::ACTIVO);

            $table->foreign('id_entidad')->references('id')->on('entidades');
            $table->foreign('id_alumno')->references('id')->on('alumnos');

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
        Schema::dropIfExists('parientes');
    }
}
