<?php
	session_start();

	if($_SESSION['rol'] != 1 and $_SESSION['rol'] != 2)
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

			$cat	 = $_POST['cat'];
			
		
			$query_insert = mysqli_query($conection,"INSERT INTO cat(cat)
														VALUES('$cat')");
				if($query_insert){
					$alert='<p class="msg_save">Categoria guardada correctamente.</p>';
				}else{
					$alert='<p class="msg_error">Error al guardar la categoria.</p>';
				}
			}

		}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Registro de Categorias</title>
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<div class="form_register">
			<h1><i class="fas fa-cubes"></i>Registro de categoria</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            
			<form action="" method="post" enctype="multipart/form-data">

            <label for="proveedor">Nombre de Categoria</label>

                <input type="text" name="cat" id="cat" placeholder="Insertar el nombre de la Categoria">
                
                <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i>Guardar Categoria</button>

			</form>


		</div>


	</section>
</body>
</html>