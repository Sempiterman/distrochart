<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::class, 20)->create();

        App\Tag::create([
        	'name'	 	=> 'Seeder',
        	'slug'		=> 'Seeder de prueba estatico',
        	'fieldadd'  => 'Seeder de prueba estatico'
        ]);
        App\Tag::create([
        	'name'	 	=> 'Seeder 2',
        	'slug'		=> 'Seeder de prueba estatico 2',
        	'fieldadd'  => 'Seeder de prueba estatico 2'
        ]);
    }
}
