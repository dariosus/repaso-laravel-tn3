@extends("miPlantilla")

@section("principal")
	<h2>
		Detalle de producto: {{$product->name}}
	</h2>
	<ul>
		<li>
			Stock: {{$product->stock}}
		</li>
		<li>
			Precio: {{$product->price}}
		</li>
		<li>
			Descripcion: {{$product->description}}
		</li>
		<li>
			<a href="/marcas/{{$product->brand->id}}">
				Marca: {{$product->brand->name}}
			</a>
		</li>
		<li>
			<a href="/categorias/{{$product->category->id}}">
				Categoria: {{$product->category->name}}
			</a>
		</li>
	</ul>
@endsection