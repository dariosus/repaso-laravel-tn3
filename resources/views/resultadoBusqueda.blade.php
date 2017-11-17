@extends("miPlantilla")

@section("principal")
	<h2>
		Productos
	</h2>
	{{$products->appends(["buscar" => $buscar])->links()}}
	<ul>
		@foreach($products as $product)
			<li>
				<a href="/productos/{{$product->id}}">
					{{$product->name}}
				</a>
			</li>
		@endforeach
	</ul>
	{{$products->appends(["buscar" => $buscar])->links()}}
@endsection