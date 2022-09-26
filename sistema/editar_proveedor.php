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
		if(empty($_POST['proveedor']) || empty($_POST['contacto']) || empty($_POST['telefono']) || empty($_POST['direccion']))
		{
			$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
		}else{

			$proveedor	= $_POST['proveedor'];
			$contacto	= $_POST['contacto'];
			$telefono	= $_POST['telefono'];
			$direccion 	= $_POST['direccion'];
			$usuario_id	= $_SESSION['idUser'];

			$query_insert = mysqli_query($conection,"INSERT INTO proveedor(
				proveedor,contacto,telefono,direccion,usuario_id)
														VALUES('$proveedor','$contacto','$telefono','$direccion','
														$usuario_id')");
				if($query_insert){
					$alert='<p class="msg_save">Proveedor creado correctamente.</p>';
				}else{
					$alert='<p class="msg_error">Error al crear el Proveedor.</p>';
				}
			}
			mysqli_close($conection);

		}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Registro Usuario</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<div class="form_register">
			<h1><i class="fas fa-cubes"></i>Registro producto</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            
			<form action="" method="post" enctype="multipart/form-data">

            <label for="proveedor">Proveedor</label>
            <select name="proveedor" id="proveedor">
                <option value="1">Proveedor</option>
            </select>
                <label for="producto">Producto</label>
                <input type="text" name="producto" id="producto" placeholder="Nombre del producto">
                <label for="precio">Precio</label>
				<input type="text" name="precio" id="precio" placeholder="Precio del producto">
				<label for="cantidad">Cantidad</label>
				<input type="text" name="cantidad" id="cantidad" placeholder="Cantidad del producto">

                <div class="photo">
                    <label for="foto">Foto</label>
                        <div class="prevPhoto">
                        <span class="delPhoto notBlock">X</span>
                        <label for="foto"></label>
                        </div>
                        <div class="upimg">
                        <input type="file" name="foto" id="foto">
                        </div>
                        <div id="form_alert"></div>
                </div>

                <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i>Guardar Producto</button>

			</form>


		</div>


	</section>