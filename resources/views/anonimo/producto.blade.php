
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		*{
	margin: 0;
	padding: 0;
	border: 0;
	vertical-align: baseline;
	box-sizing: border-box;

}
body{
	background: #399e53;
	font-family: sans-serif;;
	padding-top: 125px;
	transition: padding-top 0.5s ease;
}

header{
	width: 100%;
	height: 120px;
	background: #9E9E9E ;
	text-align: center;
	position: fixed;
	top: 0;
	overflow: hidden;
	transition: all 0.5s ease;
}

 h1{
	font-size: 42px;
	color: white;
	line-height: 60px;
	font-weight: 300px;
	transition: all 0.3s ease;
}
 h1{
	font.font-weight: bold;
	text-transform: uppercase;
	background-color: black;
}
header nav{
	position: absolute;
	bottom: 0;
	height: 60px;
	line-height: 60px;
	width: 100%;
	background: rgba(23, 32, 42, 0.8);

}
header nav a{
	color: white;
	display: inline-block;
	padding: 10px 15px;
	line-height: 1;
	text-decoration: none;
	border-radius: 5px;
}
header nav a:hover{
	background: rgba(255, 235, 59, 0.2);
}
h2{
	font-size: 34px;
	text-transform: uppercase;
	font-weight: 400px;
	line-height: 2;
	color: #2c3e50;
}
h5{
	color: black;	
}
p{
	margin-bottom: 2rem;
	line-height: 2;
	color: #7f8c8d;
}

.wrapper{
	max-width: 100%;
	margin-top: 2px;

}
section{
	margin: 3%;
	padding: 5%;
	background: white;
	border-radius: 4px;
	box-shadow: 0 1px 0 rgba(0,0,0,0.2);
	position: absolute;
}
body.stiky-header{
	padding-top: 10px;

}
body.sticky-header header{
	height: 60px;
	background: #E74C3C;
}
body.sticky-header header h1{
	transform: scale(0, 0);
}
	</style> 
</head>
<body>
	<header>
		<div >
			<img src="{{url('/imagenes/logo.jpg')}}" width="80" height="60" text align="left">
			<h1>"Mercado Alpha"</h1>  
		</div>	
		<nav>
			<a href="#">Contactanos</a>
			<a href="#">Conocenos</a>
			<a href="registro/create">Registrate</a>
			<a href="/login">Mi cuenta</a>
		</nav>
	</header>
	<img src="{{url('/imagenes/encabezado2.jpg')}}"height="400">

	<div class="wrapper" >
			<section>
				<h2>Productos de la Categoria "{{$nombre}}"</h2>
				<p>Alpha es en donde los precios de los bienes y servicios se determinan por la interacción de los oferentes y demandantes sin la intervención del gobierno o cualquier otro agente externo.</p>
				@foreach ($productos as $producto)
					<div >
						<div class="card" style="width: 18rem; height: 20rem; float: left;" >
						  <img src="{{asset('storage').'/'.$producto->imagen}}" class="card-img-top" alt="..." width="200">
						  <div class="card-body" style="width: 13rem;">
						    <h5 class="card-title">{{$producto->nombre}}</h5>
						    <p class="card-text">{{$producto->descripcion}}</p>
						    <p>Precio: {{$producto->precio}}</p> 
						    <a href="/#/{{$producto->id}}" class="btn btn-primary">Ver mas</a>
						  </div>
						</div>
					</div>
				@endforeach

				
			</section>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="script.js"></script>
</body>
</html>

