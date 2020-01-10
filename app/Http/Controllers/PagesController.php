<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
protected $request;



/*public function __construct(Request $request){

	$this->request=$request;

}*/

public function __construct(){
	$this->middleware('example',['only'=>['home']]); // en vez de only puede ser except para dejar fuera a home
}

    public function home(){
    	//return ['key'=>['value1', 'value2']];

    	return view('home');
    //	return response('contenido de la respuesta', 201)
    //	->header('X-TOKEN', 'secret')
    //	->header('X-TOKEN2', 'secret')
    //	->cookie('X-COOKIE', 'cookie');

    }

    public function saludo($nombre="Invitado"){
	$html="<h2>Contenido html</h2>";
	$script="<script>alert('Problema XSS - Cross Site Scripting!' )</script>";

	$consolas=["
	Play Station 4,
	Xbox One,
	Wii U"];

	return view('saludo2', compact('nombre', 'html', 'script', 'consolas'));
    }

    /*public function mensajes(){
if($this->request->has('nombre')){
    		return 'si tiene nombre. Es '.$this->request->input('nombre');
    	}
    	return 'no tiene nombre';

    	// return $this->request->all(); este metodo me recuerda de broker.php para contraseña
    }*/


    /*public function mensajes(Request $request){

     $this->validate($request, [
	
	'nombre' => 'required',
    'email' => 'required|email', // alt 124 |, aqui son 2 validaciones para requerir el campo y para que sea formato email
    'mensaje'=>'required|min:5'
    ]); 

return $request->all();

    }*/


    public function mensajes(CreateMessageRequest $request){

//return $request->all(); // aqui estamos devolviendo un array
//redireccioin

    	$data = $request->all();
    	//return response()->json(['data'=>$data],202)
    	//->header('TOKEN', 'secret');
    	//return redirect()->route('contactos')->with('info', 'Tu mensaje ha sido enviado exitosamente';
    	return back()->with('info', 'Tu mensaje ha sido enviado exitosamente :)');

    }
}
