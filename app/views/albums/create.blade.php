@extends ('layouts.master')

@section ('content')

  	<h1>Formulario de alta </h1>

  	 {{  Form::open(array('route' => 'album.store'))}}
  	 	<div>
  	 		{{Form::label('titulo', 'Titulo de album')}}
  	 		{{Form::text('title','') }}	
  	 	</div>
  	 	
  	 	<div>
  	 		{{Form::label('titulo', 'Autor')}}
  	 		{{Form::text('autor','') }}
  	 	</div>
  	 	
  	 	

  	 	{{ Form::submit('Register') }}
  	 {{ Form::close() }}
@stop