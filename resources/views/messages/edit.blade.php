@extends('layout')

@section('contenido')
<h1>Editar mensaje de {{$message->nombre}}</h1>
<form method="POST"  action="{{route('mensajes.update', $message->id) }}" >
	{!!method_field('PUT')!!}
	{!!csrf_field()!!}
		
	<p><label for="nombre">
		Nombre <input type="text" name="nombre" value="{{$message->nombre}}">
		{!!$errors->first('nombre', '<span class="error">:message</span>')!!}
	</label></p>
	<p><label for="email">
		Email <input type="email" name="email" value="{{$message->email}}">
		{!!$errors->first('email', '<span class="error">:message</span>')!!}
	</label></p>
	<p><label for="nombre">
		Mensaje <input type="text" name="mensaje" value="{{$message->mensaje}}">
		{!!$errors->first('mensaje', '<span class="error">:message</span>')!!}
	</label></p>
	<input type="submit" value="Enviar">
</form>
@stop