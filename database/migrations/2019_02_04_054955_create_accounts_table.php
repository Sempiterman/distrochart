<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nameuser', 64);
            // $table->string('slug', 128)->unique();
            $table->string('nombre', 50);
            $table->string('apellidop', 50);
            $table->string('apellidom', 50);
            $table->string('correo', 50)->unique();
            $table->string('password', 18);
            $table->string('nummoviline', 10);
            $table->text('observaciones');
            $table->enum('status', ['ACTIVA', 'INACTIVA','INHABILITADA','SUSPENDIDA'])->default('ACTIVA');
            
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
        Schema::dropIfExists('accounts');
    }
}
