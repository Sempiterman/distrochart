<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Position::create([
        	'name'		  => 'SE',
        	'slug'		  => 'se',
        	'descripcion' => 'Supervisor electoral'
        ]);
        App\Position::create([
        	'name'		  => 'CAE',
        	'slug'		  => 'cae',
        	'descripcion' => 'Asistente electoral de casilla'
        ]);
        App\Position::create([
        	'name'		  => 'FMDC',
        	'slug'		  => 'fmdc',
        	'descripcion' => 'Funcionario de mesa directiva de casilla'
        ]);
    }
}
