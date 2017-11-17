@extends("miPlantilla")

@section("principal")
	<h2>
		Categorías
	</h2>
	<ul>
		@foreach($categories as $category)
			<li>
				<a href="/categorias/{{$category->id}}">
					{{$category->name}}
				</a>
			</li>
		@endforeach
	</ul>
@endsection

@section("css")
	<link rel="stylesheet" type="text/css" href="css/categorias.css">
@endsection