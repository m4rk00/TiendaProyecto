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
			header("location: lista_categoria.php");
			mysqli_close($conection);
			exit;
		}
		$codcat = $_POST['codcat'];

		$query_delete = mysqli_query($conection,"DELETE FROM cat WHERE codcat =$codcat ");
		//$query_delete = mysqli_query($conection,"UPDATE usuario SET estatus = 0 WHERE idusuario = $idusuario ");
		mysqli_close($conection);
		if($query_delete){
			header("location: lista_categoria.php");
		}else{
			echo "Error al eliminar categoria";
		}

	}




	if(empty($_REQUEST['id']))
	{
		header("location: lista_categoria.php");
		mysqli_close($conection);
	}else{

		$codcat = $_REQUEST['id'];

		$query = mysqli_query($conection,"SELECT u.cat
												FROM cat u
												WHERE u.codcat = $codcat ");
		
		mysqli_close($conection);
		$result = mysqli_num_rows($query);

		if($result > 0){
			while ($data = mysqli_fetch_array($query)) {
				# code...
				$cat = $data['cat'];
			}
		}else{
			header("location: lista_categoria.php");
		}


	}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Eliminar Categoria</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		<div class="data_delete">
			<h2>¿Está seguro de eliminar la siguiente categoria?</h2>
			<p>Nombre: <span><?php echo $cat; ?></span></p>


			<form method="post" action="">
				<input type="hidden" name="codcat" value="<?php echo $codcat; ?>">
				<a href="lista_categoria.php" class="btn_cancel">Cancelar</a>
				<input type="submit" value="Aceptar" class="btn_ok">
			</form>
		</div>


	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>