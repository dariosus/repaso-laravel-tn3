<!DOCTYPE html>
<html>
<head>
	<title>DH SHOP</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/micss.css">
	@yield("css")
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul>
					<li>
						<a href="/categorias">
							Categorias
						</a>
					</li>
					<li>
						<a href="/marcas">
							Marcas
						</a>
					</li>
					<li>
						<a href="/productos">
							Productos
						</a>
					</li>
					@if (auth()->check())
						<li>
							Bienvenido {{auth()->user()->name}}
						</li>
						<li>
							<form method="post" action="/logout">
								{{csrf_field()}}
								<input type="submit" value="Logout" class="btn btn-link">
								
							</form>
						</li>
					@else
						<li>
							<a href="/register">
								Registración
							</a>
						</li>
						<li>
							<a href="/login">
								Ingresá
							</a>
						</li>
					@endif
					<li>
						<form class="buscar" method="GET" action="/buscarProductos">
							<input class="form-control buscar" type="text" name="buscar">
							<input type="submit" name="" value="Buscar" class="btn btn-primary">
						</form>
					</li>
				</ul>
			</nav>
		</header>
		<div class="jumbotron">
			<h1>
				<marquee scrollamount="15">WELCOME TO DH SHOP</marquee>
			</h1>
		</div>
		@yield("principal")
	</div>
</body>
</html>