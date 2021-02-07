<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\estatus;

class CreateMaestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_entidad')->default(2);
            $table->string('nombre');
            $table->string('apellidos');
            $table->enum('id_estatus',[estatus::ACTIVO, estatus::INACTIVO, estatus::ELIMINADO])->default(estatus::ACTIVO);

            $table->foreign('id_entidad')->references('id')->on('entidades');

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
        Schema::dropIfExists('maestros');
    }
}
