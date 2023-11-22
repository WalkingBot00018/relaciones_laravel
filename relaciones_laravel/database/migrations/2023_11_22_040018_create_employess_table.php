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
        Schema::create('employess', function (Blueprint $table) {
            $table->id();
            $table->string('nro_doc');
            $table->string('direccion_casa');
            $table->string('trabajo');
            $table->decimal('salario_basico',8,2);
            $table->date('fecha_admision');
            $table->timestamps();

            $table->foreign('nro_doc')->references('nro_doc')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employess');
    }
};
