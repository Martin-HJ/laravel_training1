@extends ('layouts.master')

@section ('content')

  	<h1>Formulario de alta </h1>

  	 {{  Form::open(array('route' => 'category.store'))}}
  	 	<div>
  	 		{{Form::label('nombre', 'Categoria')}}
  	 		{{Form::text('name','') }}	
  	 	</div>
  	 <center>	{{ Form::submit('Register') }}
  	 {{ Form::close() }}
     </center>
@stop