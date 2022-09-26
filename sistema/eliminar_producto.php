<?php 
	session_start();
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}
	include "../conexion.php";

	if(!empty($_POST))
	{
		if($_POST['codcat'] == 1){
			header("location: lista_productos.php");
			mysqli_close($conection);
			exit;
		}
		$codproducto = $_POST['codproducto'];

		$query_delete = mysqli_query($conection,"DELETE FROM producto WHERE codproducto =$codproducto ");
		//$query_delete = mysqli_query($conection,"UPDATE usuario SET estatus = 0 WHERE idusuario = $idusuario ");
		mysqli_close($conection);
		if($query_delete){
			header("location: lista_productos.php");
		}else{
			echo "Error al eliminar producto";
		}

	}




	if(empty($_REQUEST['id']))
	{
		header("location: lista_productos.php");
		mysqli_close($conection);
	}else{

		$codproducto = $_REQUEST['id'];

		$query = mysqli_query($conection,"SELECT u.descripcion
												FROM producto u
												WHERE u.codproducto = $codproducto ");
		
		mysqli_close($conection);
		$result = mysqli_num_rows($query);

		if($result > 0){
			while ($data = mysqli_fetch_array($query)) {
				# code...
				$descripcion = $data['descripcion'];
			}
		}else{
			header("location: lista_productos.php");
		}


	}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Eliminar Producto</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		<div class="data_delete">
			


			<form method="post" action="">
				<br><br>
				<h2>¿Está seguro de eliminar el siguiente producto?</h2>
				<p>Nombre: <span><?php echo $descripcion; ?></span></p>
				<input type="hidden" name="codproducto" value="<?php echo $codproducto; ?>">
				<a href="lista_productos.php" class="btn_cancel">Cancelar</a>
				<input type="submit" value="Aceptar" class="btn_ok">
			</form>
		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>