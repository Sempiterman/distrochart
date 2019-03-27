<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charters', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('are_id')->unsigned();
            $table->integer('zore_id')->unsigned();

            $table->string('folio', 128)->unique();
            // $table->string('slug', 128)->unique();
            $table->mediumText('detalles')->nullable();
            $table->enum('status', ['DISPONIBLE', 'EXPEDIENTE PRESTADO','EXPEDIENTE DESTRUIDO'])->default('DISPONIBLE');
            $table->string('img', 128)->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('are_id')->references('id')->on('ares')
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
        Schema::dropIfExists('charters');
    }
}
