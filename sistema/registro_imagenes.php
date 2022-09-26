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
		if(empty($_POST['cat']) || empty($_POST['producto']))
		{
			$alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
		}else{

			
		

			$cat	 = $_POST['cat'];
            $producto	 = $_POST['producto'];
            $foto	= $_FILES['foto'];
			$nombre_foto = $foto['name'];
			$type		 = $foto['type'];
			$url_temp	 = $foto['tmp_name'];

			$imgProducto = 'img_producto.png';

			if($nombre_foto != '')
			{
				$destino = 'img/uploads/';
				$img_nombre = 'img_'.md5(date('d-m-Y H:m:s'));
				$imgProducto = $img_nombre.'.jpg';
				$src		 = $destino.$imgProducto;
					
			}
		
			$query_insert = mysqli_query($conection,"INSERT INTO imagen_card(descripcion,foto,cat)
														VALUES('$producto','$imgProducto','$cat')");
				if($query_insert){
					if($nombre_foto != ''){
						move_uploaded_file($url_temp,$src);
					}
					$alert='<p class="msg_save">Producto guardado correctamente.</p>';
				}else{
					$alert='<p class="msg_error">Error al guardar el Producto.</p>';
				}
			}

		}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Registro Imagenes</title>
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<div class="form_register">
			<h1><i class="fas fa-cubes"></i>Registro Imagenes</h1>
			<hr>
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
            
			<form action="" method="post" enctype="multipart/form-data">

        


			<label for="cat">Categoria</label>

			<?php

				$query_cat = mysqli_query($conection, "SELECT codcat, cat FROM cat ORDER BY cat ASC");
				$result_cat = mysqli_num_rows($query_cat);
				mysqli_close($conection);
			?>
            <select name="cat" id="cat">
                <?php

					if($result_cat > 0){
						while ($cat = mysqli_fetch_array($query_cat)) {
			?>	
				<option value="<?php echo $cat['codcat'];?>"><?php echo $cat['cat'];?></option>
			<?php
						}
					}

			?>
            </select>


                <label for="producto">Nombre</label>
                <input type="text" name="producto" id="producto" placeholder="Nombre de la imagen">
      
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
</body>
</html>
<script>
$("#producto").keyup(function(){              
        var ta      =   $("#producto");
        letras      =   ta.val().replace(/ /g, "");
        ta.val(letras)
}); 
</script>