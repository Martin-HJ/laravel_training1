@extends ('layouts.master')

@section ('content')

  	<h1>Hello  </h1>

  	<table class="table">
	  	@foreach($albums as $album)
	  		<tr>
	  			<td>{{ $album->id}}</td>
	  			<td>{{ $album->title}}</td>
	  			<td>{{ $album->autor}}</td>
	  		</tr>
	  	@endforeach
  	</table>
@stop