<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('employ_id')->unsigned();
            // numepleado FK
            $table->string('folio', 128);
            $table->enum('chaleco', ['SI', 'NO'])->default('SI');
            $table->enum('mochila', ['SI', 'NO'])->default('SI');
            $table->enum('gafete', ['SI', 'NO'])->default('SI');
            $table->enum('rotafolio', ['SI', 'NO'])->default('SI');
            $table->enum('manuales', ['SI', 'NO'])->default('SI');
            $table->enum('sombrero', ['SI', 'NO'])->default('SI');
            $table->enum('portahojas', ['SI','NO'])->default('SI');
            $table->enum('utileria', ['SI', 'NO'])->default('SI');
            $table->text('detalles');

            $table->enum('status', ['ENTREGADO', 'PENDIENTE'])->default('ENTREGADO');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('employ_id')->references('id')->on('employs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kit_forms');
    }
}
