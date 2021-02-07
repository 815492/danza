<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {

            $table->string('telefono')->nullable()->default('null');
            $table->string('email')->nullable()->default('null');
            $table->string('calle')->nullable()->default('null');
            $table->string('numero')->nullable()->default('null');
            $table->string('colonia')->nullable()->default('null');
            $table->string('cp')->nullable()->default('null');

            $table->unsignedBigInteger('directoreable_id');
            $table->string('directoreable_type');

            $table->primary(['directoreable_id','directoreable_type']);

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
        Schema::dropIfExists('directorios');
    }
}
