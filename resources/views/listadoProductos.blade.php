@extends("miPlantilla")

@section("principal")
	<h2>
		Productos
	</h2>
	<ul>
		@foreach($products as $product)
			<li>
				<a href="/productos/{{$product->id}}">
					{{$product->name}}
				</a>
			</li>
		@endforeach
	</ul>
@endsection