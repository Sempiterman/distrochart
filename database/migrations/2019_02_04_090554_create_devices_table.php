<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('id');

            $table->string('imei', 12);
            // $table->string('slug', 24)->unique();
            $table->string('marca', 50);
            $table->string('numtelchip', 10);
            $table->string('compania', 50);
            $table->enum('status', ['FUNCIONAL', 'NO FUNCIONAL'])->default('FUNCIONAL');
            $table->text('observaciones');

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
        Schema::dropIfExists('devices');
    }
}
