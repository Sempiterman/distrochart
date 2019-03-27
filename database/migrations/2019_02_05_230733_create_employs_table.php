<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->unsigned();
            $table->integer('are_id')->unsigned();
            $table->integer('municipality_id')->unsigned();
            $table->integer('position_id')->unsigned();
            $table->integer('zore_id')->unsigned();
            
            $table->string('numempleado', 64)->unique();
            $table->string('name', 64);
            $table->string('apellidop', 64);
            $table->string('apellidom', 64);
            $table->text('direccion');
            $table->string('telefono', 64);
            $table->string('correo', 64);
            $table->enum('status', ['ACTIVO', 'INACTIVO','SUSPENDIDO','BAJA'])->default('ACTIVO');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('are_id')->references('id')->on('ares')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('municipality_id')->references('id')->on('municipalities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('positions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('zore_id')->references('id')->on('zores')
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
        Schema::dropIfExists('employs');
    }
}
