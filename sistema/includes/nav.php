		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
			<?php 
				if($_SESSION['rol'] == 1){
			 ?>
				<li class="principal">

					<a href="#">Usuarios</a>
					<ul>
						<li><a href="registro_usuario.php">Nuevo Usuario</a></li>
						<li><a href="lista_usuarios.php">Lista de Usuarios</a></li>
					</ul>
				</li>
			<?php } ?>
				<li class="principal">
					<a href="#">Productos</a>
					<ul>
			<?php 
			if($_SESSION['rol'] == 1){
			?>
						<li><a href="registro_producto.php">Nuevo Producto</a></li>
			<?php } ?>
						<li><a href="lista_productos.php">Lista de Productos</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="#">Imagenes</a>
					<ul>
			<?php 
			if($_SESSION['rol'] == 1){
			?>
						<li><a href="registro_imagenes.php">Nueva imagen</a></li>
			<?php } ?>
						<li><a href="lista_imagenes.php">Lista de imagenes</a></li>
					</ul>
				</li>
				<li class="principal">
					<a href="lista_categoria.php">Categorias</a>
				</li>
			</ul>
		</nav>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

</body>
</html>