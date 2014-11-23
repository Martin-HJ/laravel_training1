@extends ('layouts.master')

@section ('content')

  	<h1>Hello  </h1>

  	<table class="table">
	  	@foreach($categories as $category)
	  		<tr>
	  			<td>{{ $category->id}}</td>
	  			<td>{{ $category->name}}</td>
	  			
	  		</tr>
	  	@endforeach
  	</table>
@stop