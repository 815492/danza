<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\estatus;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_entidad')->default(4);
            $table->unsignedBigInteger('id_maestro');
            $table->string('nombre');
            $table->string('descripcion');
            $table->time('horario');
            $table->enum('id_estatus',[estatus::ACTIVO, estatus::INACTIVO, estatus::ELIMINADO])->default(estatus::ACTIVO);

            $table->foreign('id_entidad')->references('id')->on('entidades');
            $table->foreign('id_maestro')->references('id')->on('maestros');

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
        Schema::dropIfExists('clases');
    }
}
