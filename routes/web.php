<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
//  -----------FRONT-END AVISOS AND OTHERS---------------------------------------------------

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('/post/{slug}', 'Web\PageController@post')->name('post');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');
//  ------------BACK-END AVISOS---------------------------------------------------------------
Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('posts', 		'Admin\PostController');
//------------------------- OTHERS------------------------------------------------------------
Route::get('inicio', 'Vistas\VistasController@inicio')->name('inicio');
Route::get('contactos', 'Vistas\VistasController@contactos')->name('contactos');
Route::get('nosotros', 'Vistas\VistasController@nosotros')->name('nosotros');
// -------------BACK-END PERSONAL------------------------------------------------------------
Route::resource('cuentas', 				'Personal\AccountController');
Route::resource('dispositivos', 		'Personal\DeviceController');
Route::resource('personal',		 		'Personal\EmployController');
// -------------BACK-END DOCUMENTS-----------------------------------------------------------
Route::resource('cartas', 				'Documents\CharterController');
Route::resource('moviles', 				'Documents\MovilController');
Route::resource('equipos', 				'Documents\KitController');
// -------------BACK-END RELATIONAL CRUDS----------------------------------------------------
Route::resource('ares', 			'Partake\AreController');
Route::resource('municipios', 		'Partake\MunicipalityController');
Route::resource('zores', 			'Partake\ZoreController');
Route::resource('cargos', 			'Partake\PositionController');
//// BACK END EMAIL
// ------------------------------------------------------------------------------------------
Route::get('/mail', 'EmailController@sendmail')->name('sendmail');
Route::post('/contactar', 'EmailController@contact')->name('contact');

// ----------------CHARTS--------------------------------------------------------------------
Route::get('chartaccount' ,'Personal\AccountController@chart');
Route::get('chartdevices' ,'Personal\DeviceController@chart');
Route::get('chartemploy'  ,'Personal\EmployController@chart');
Route::get('chartkit'  	  ,'Documents\KitController@chart');
Route::get('chartmovil'   ,'Documents\MovilController@chart');
Route::get('chartcharter' ,'Documents\CharterController@chart');

// --------------------------- ROUTE PDF GENERATE ---------------------------------------------
Route::get('arespdf',			'Partake\AreController@PDF');
Route::get('cartaspdf',			'Documents\CharterController@PDF');
Route::get('cuentaspdf',		'Personal\AccountController@PDF');
Route::get('dispositivospdf',	'Personal\DeviceController@PDF');
Route::get('empleadospdf',		'Personal\EmployController@PDF');
Route::get('equipospdf',		'Documents\KitController@PDF');
Route::get('movilespdf',		'Documents\MovilController@PDF');
Route::get('municipiospdf', 	'Partake\MunicipalityController@PDF');
Route::get('zorespdf',			'Partake\ZoreController@PDF');





















// -------------BACK-END USERS----------------------------------------------------
Route::resource('usuarios', 	'UserController');