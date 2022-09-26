<?php 
	session_start();
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}
	
	include "../conexion.php";	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Lista de productos</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.css" />
<script style="align-items: center;" src="//cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.4.1/jquery.jgrowl.min.js"></script>
</head>
<body>



<script>  $('.add_product').click(function(e) {

e.preventDefault();
var producto = $(this).attr('product');
alert(producto);


});</script>
	<?php include "includes/header.php"; ?>



	
	<section id="container">
		
		<h1>Lista de productos</h1>
		<a href="registro_producto.php" class="btn_new">Crear producto</a>
		
		<form action="buscar_usuario.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
			<input type="submit" value="Buscar" class="btn_search">
		</form>

		<table>
			<tr>
				<th>Código</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Existencia</th>
				<th>Descripcion</th>
				
				<th>Foto</th>
                <th>Acciones</th>
			</tr>
		<?php 
			//Paginador
			$sql_registe = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM producto");
			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 5;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($conection,"SELECT * FROM producto ORDER BY codproducto ASC LIMIT $desde,$por_pagina 
				");

			mysqli_close($conection);

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
                    if($data['foto']!='img_producto.png'){
                        $foto='img/uploads/'.$data['foto'];
                    }
                    else{
                        $foto='img/'.$data['foto'];
                }
					
			?>
				<tr class="row<?php echo $data["codproducto"]; ?>">
					<td><?php echo $data["codproducto"]; ?></td>
					<td><?php echo $data["descripcion"]; ?></td>
					<td class="celPrecio"><?php echo $data["precio"]; ?></td>
					<td class="celExistencia"><?php echo $data["existencia"]; ?></td>
					<td><?php echo $data["info"]; ?></td>
					<td ><img  src="<?php echo $foto; ?>" alt="<?php echo $data["descripcion"]; ?>"style="width:150px; height:auto; border:auto;"  ></td> <!-- NO PUDE AÑADIR CLASE CON ESTILOS, LO HICE MANUAL-->
					<td>
					<a class="link_add add_product" product="<?php echo $data["codproducto"];?>" href="#"?><i class="fas fa-plus"></i>Editar</a>


					<?php if($_SESSION['rol']== 1 || $_SESSION['rol'] == 2){ ?>
						|
						<a class="link_delete" href="eliminar_producto.php?id=<?php echo $data["codproducto"]; ?>">Eliminar</a>

					<?php } ?>
						
					</td>
				</tr>
			
		<?php 
				}

            }
		 ?>


		</table>
		<div class="paginador">
			<ul>
			<?php 
				if($pagina != 1)
				{
			 ?>
				<li><a href="?pagina=<?php echo 1; ?>"><i class="fas fa-step-backward"><<</i></a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"><i class="fas fa-step-backward"></i><<</a></li>
			<?php 
				}
				for ($i=1; $i <= $total_paginas; $i++) { 
					# code...
					if($i == $pagina)
					{
						echo '<li class="pageSelected">'.$i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
					}
				}

				if($pagina != $total_paginas)
				{
			 ?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
			<?php } ?>
			</ul>
		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>