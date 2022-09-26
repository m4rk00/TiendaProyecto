<?php 
	
	session_start();
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}

	include "../conexion.php";

	if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['cat']))
		{
			$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
		}else{

			$cat = $_POST['cat'];
			$codcat = $_POST['codcat'];
			
			$query = mysqli_query($conection,"SELECT * FROM cat 
													   WHERE codcat = $codcat");

			$result = mysqli_fetch_array($query);

			$sql_update = mysqli_query($conection,"UPDATE cat
													SET cat = '$cat'
													WHERE codcat= $codcat ");


				if($sql_update){
					$alert='<p class="msg_save">Categoria actualizada correctamente.</p>';
				}else{
					$alert='<p class="msg_error">Error al actualizar la categproa.</p>';
				}

			}


		}

	//Mostrar Datos
	if(empty($_REQUEST['id']))
	{
		header('Location: lista_categoria.php');
		mysqli_close($conection);
	}
	$codcat = $_REQUEST['id'];

	$sql= mysqli_query($conection,"SELECT cat
									FROM cat
									WHERE codcat= $codcat");
	mysqli_close($conection);
	$result_sql = mysqli_num_rows($sql);
	if($result_sql == 0){
		header('Location: lista_categoria.php');
	}else{
		$option = '';
		while ($data = mysqli_fetch_array($sql)) {
		$cat  = $data['cat'];
		}
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Actualizar Categorias</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<div class="form_register">
			<h1>Actualizar Categorias</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>

			<form action="" method="post">
				<input type="hidden" name="codcat" value="<?php echo $codcat; ?>">
				<label for="nombre">Categoria</label>
				<input type="text" name="cat" id="cat" placeholder="Categoria nueva" value="<?php echo $cat; ?>">
				<input type="submit" value="Actualizar categoria" class="btn_save">
			</form>
		</div>

	</section>
	<?php  ?>
	<?php include "includes/footer.php"; ?>
	

</body>
</html>