<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('employ_id')->unsigned();
            // numepleado FK
            $table->string('folio', 128);
            $table->enum('audifonos', ['SI', 'NO'])->default('SI');
            $table->enum('cargador', ['SI', 'NO'])->default('SI');
            $table->enum('cable', ['SI', 'NO'])->default('NO');
            $table->enum('estado', ['BUENO', 'REGULAR','MALO'])->default('BUENO');
            $table->enum('bateria', ['SI', 'NO'])->default('SI');
            $table->enum('chip', ['SI', 'NO'])->default('SI');
            $table->enum('dysplay', ['BUENO','NO FUNCIONAL','ESTRELLADO'])->default('BUENO');
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
        Schema::dropIfExists('movil_forms');
    }
}
