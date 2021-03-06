@extends('layout')

@section('contenido')

<h1>Contactos</h1>
<h2>Escríbeme</h2>
@if(session()->has('info'))
<h3>{{session('info')}}</h3>
@else
<form method="POST" action="contacto">
	{!!csrf_field()!!}
	
	<p><label for="nombre">
		Nombre <input type="text" name="nombre" value="{{old('nombre')}}">
		{!!$errors->first('nombre', '<span class="error">:message</span>')!!}
	</label></p>
	<p><label for="email">
		Email <input type="email" name="email" value="{{old('email')}}">
		{!!$errors->first('email', '<span class="error">:message</span>')!!}
	</label></p>
	<p><label for="nombre">
		Mensaje <input type="text" name="mensaje" value="{{old('mensaje')}}">
		{!!$errors->first('mensaje', '<span class="error">:message</span>')!!}
	</label></p>
	<input type="submit" value="Enviar">
</form>
@endif
<hr>

@stop