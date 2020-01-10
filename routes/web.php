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

/*Route::get('/', ['as'=> 'home',function () {
    return view('home');

}]);*/


Route::get('/', ['as'=> 'home', 'uses' => 'PagesController@home'])->middleware('example');


Route::get('contactame', ['as'=> 'contactos', function(){
return view('contactos');
}]);

/*Route::get('saludos/{nombre?}', ['as'=>'saludos', function($nombre="Invitado"){
	// return view('saludo', ['nombre'=>$nombre]);
	//return view('saludo')->with(['nombre'=>$nombre]);

	$html="<h2>Contenido html</h2>";
	$script="<script>alert('Problema XSS - Cross Site Scripting!' )</script>";

	$consolas=["
	Play Station 4,
	Xbox One,
	Wii U"];

	return view('saludo', compact('nombre', 'html', 'script', 'consolas'));

}])->where('nombre',"[A-Za-z]+");
*/



/*Route::get('saludos2/{nombre?}', ['as'=>'saludos', function($nombre="Invitado"){
	// return view('saludo', ['nombre'=>$nombre]);
	//return view('saludo')->with(['nombre'=>$nombre]);

	$html="<h2>Contenido html</h2>";
	$script="<script>alert('Problema XSS - Cross Site Scripting!' )</script>";

	$consolas=["
	Play Station 4,
	Xbox One,
	Wii U"];

	return view('saludo2', compact('nombre', 'html', 'script', 'consolas'));

}])->where('nombre',"[A-Za-z]+");*/

Route::get('saludos2/{nombre?}', ['as'=>'saludos2', 'uses'=> 'PagesController@saludo'])->where('nombre',"[A-Za-z]+");
/*
Route::post('contacto', 'PagesController@mensajes');

Route::get('mensajes', ['as'=> 'messages.index', 'uses'=>'MessagesController@index']);
Route::get('mensajes/{id}', ['as'=> 'messages.show', 'uses'=>'MessagesController@show']);
Route::get('mensaje/create', ['as'=> 'messages.create', 'uses'=>'MessagesController@create']);
Route::post('mensajes', ['as'=> 'messages.store', 'uses'=>'MessagesController@store']);
Route::get('mensajes/{id}/edit', ['as'=> 'messages.edit', 'uses'=>'MessagesController@edit']);
Route::put('mensajes/{id}', ['as'=> 'messages.update', 'uses'=>'MessagesController@update']);
Route::delete('mensajes/{id}', ['as'=> 'messages.destroy', 'uses'=>'MessagesController@destroy']);*/

Route::resource('mensajes', 'MessagesController');




Route::get('login', ['as'=>'login', 'uses'=>'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');


Route::get('test', function(){ //esto fue solo para crear un usuario
$user = new App\User;
$user->name='Alex';
$user->email='Alex@email';
$user->password= bcrypt('123');
$user->save();

return $user;
});



