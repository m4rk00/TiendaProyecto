<?php 
	
	session_start();

	include "conexion.php";

	$idproducto = $_REQUEST['id'];

	$sql= mysqli_query($conection,"SELECT descripcion,info,foto,codproducto, precio
									FROM producto
									WHERE codproducto= $idproducto");
	mysqli_close($conection);
	$result_sql = mysqli_num_rows($sql);

	if($result_sql == 0){

	}else{
		$option = '';
		while ($data = mysqli_fetch_array($sql)) {
			$nombre  = $data['descripcion'];
			$info  = $data['info'];
            $foto='sistema/img/uploads/'.$data['foto'];
            $codproducto = $data['codproducto'];
            $precio = $data['precio'];

		}
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Gregory</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/utilcontacto.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="socialbar.css">

</head>

<body>
    <!-- End Main Top -->
    <div class="social-bar">
        <a href="https://www.facebook.com/REGALOS-GREGORY-172220312836570" class="icon icon-facebook" target="_blank"></a>
        <a href="https://wa.me/524271184819?text=Me%20interesan%20los%20productos%20que%20ustedes%20estan%20vendiendo.%20%20Me%20comunico%20con%20ustedes%20desde%20su%20pagina%20web." class="icon icon-whatsapp" target="_blank"></a>
        <a href="https://www.instagram.com/regalosgregory/" class="icon icon-instagram" target="_blank"></a>
    </div>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg color" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/LogoSlideBar.png" class="logo" alt="" width="50px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">Acerca de Gregory</a></li>
                        <li class="nav-item"><a href="productos.php" class="nav-link">Tienda</a></li>
                        <li class="nav-item"><a href="gallery.php" class="nav-link">Galeria</a></li>
                        <li class="nav-item"><a href="contact-us.html" class="nav-link">Contactanos</a></li>
                        <li class="nav-item"><a href="index2.php" class="nav-link">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tienda</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> <a href="#">Tienda</a> </li>
                        <li class="breadcrumb-item"><a href="index.html">Gregory Regalos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <style>
        .imgs {
        width: 300px;
        height: 300px;
        display:block;
        margin:auto;
        }

        @media only screen and (max-width: 753px) {
        .imgs {
        width: 200px;
        height: 200px;
        display:block;
        margin:auto;
        }
        }
    </style>

    <div class="container-contact100">
        <div class="wrap-contact100">
            <form action="enviar_producto.php" method="post" class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Formato de compra
                    <br>Envíos
                </span>

                <span class="contact100-form-title" style="font-size: 20px;color: #E32D2D;">
                   Solo San Juan de Río. Qro.
                </span>

                <div style="width: 45%; float:left">
                    <div class="wrap-input100 validate-input bg1">
                        <span class="label-input100"><b>Producto:</b></span>
                        <input type="text" name="producto" id="producto" class="input100" value="<?php echo $nombre;?>" readonly>
                    </div>

                    <div class="wrap-input100 validate-input bg1">
                        <span class="label-input100"><b>Descripcion:</b></span>
                        <input type="text" name="descripcion" id="descripcion" class="input100" value="<?php echo $info;?>" readonly>
                    </div>
                    
                    <div style="width: 48%; float:left">
                        <div class="wrap-input100 validate-input bg1">
                            <span class="label-input100"><b>Precio:</b></span>
                            <input type="number" name="precio" id="precio" class="input100" value="<?php echo $precio;?>" readonly>
                        </div>
                    </div>
                    <div style="width: 48%; float:right">
                        <div class="wrap-input100 validate-input bg1">
                            <span class="label-input100"><b>Costo Envio:</b></span>
                            <input type="text" class="input100" value="15" disabled>
                        </div>
                    </div>
                </div>

                <div style="width: 55%; float:right">
                    <img  src="<?php echo $foto; ?>" alt="<?php echo $data["descripcion"]; ?>" alt="Image placeholder" class="img-fluid imgs">
                </div>

                <div class="wrap-input100 validate-input bg1" data-validate="Por favor ingresa tu nombre">
                    <span class="label-input100">Nombre completo *</span>
                    <input type="text" name="name" id="name" class="input100" placeholder="Nombre">
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Porfavor ingresa tu email (ejemplo@gmail.com)">
                    <span class="label-input100">Email *</span><br>
                    <input type="text" name="mail" id="mail" class="input100" placeholder="Ingrese su correo aqui">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Telefono</span>
                    <input type="text" name="phone" id="subject" class="input100" placeholder="Teléfono">
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate">
                    <span class="label-input100">Dirección completa</span>
                    <textarea name="mensaje" class="input100" placeholder="Colonia/Calle/Numero/Código Postal" id="mensaje"></textarea>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate">
                    <span class="label-input100">Especificaciones Extras</span>
                    <textarea name="especific" class="input100" placeholder="¿Necesitas que llegue un día en espeficio? Añade lo que necesites que sepamos aquí. (Recuerda reservar el pedido con tiempo)" id="especific"></textarea>
                </div>


                <div class="panel-body">
                    <p style="font-size:25px">DEPÓSITO O TRANSFERENCIA</p>
                    <hr>
                    <div class="col-xs-12">
                        <p>
                            <b>Tenemos disponibles estos métodos de pago:</b>
                        </p>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <img class="img-responsive" src="img/bancomer2.png" alt="">
                        <p>
                        <b>Numero de Tarjeta:</b> 4152 3137 2725 9983 <br> <b>Numero de Cuenta:</b> 289 596 209 9 <br> <b>Beneficiario:</b> Gregorio Gonzales Mancilla <br> <b>Monto:</b> $<?php echo $precio; ?>
                        </p>
                    </div>

                    <div class="col-xs-6 col-md-6">
                        <img class="img-responsive" src="img/oxxo.png" alt="">
                        <p>
                            <b>Inbursa:</b> 465 828 501 135 501 7<br> <b>Beneficiario:</b> Gregorio Gonzales Mancilla <br> <b>Monto:</b> $<?php echo $precio; ?>
                        </p>
                    </div>

                    <div class="col-xs-12">
                        <br>
                        <div>
                            Una vez realizado su pago por favor envíenos una fotografía de su ticket al correo "regalosgregory2009@hotmail.com" o nuesto WhatsApp y nosotros nos contactaremos con usted para confirmar su pedido.
                            <br><br> Nota* Los pagos en OXXO toman hasta 24horas en acreditarse.
                        </div>

                    </div>
                </div>


                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">
                        <span>
                            Enviar ➤
                            <i class="fa m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Start Footer  -->
    <footer class="ftco-footer py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright RegalosGregory&copy; 2021
                    </p>

                    <ul class="ftco-footer-social p-0">
                        <a href="https://www.facebook.com/REGALOS-GREGORY-172220312836570" target="_blank"><img src="images/iconos/Facebook.png" width="20px"></a>
                        <a href="https://www.instagram.com/regalosgregory/" target="_blank"><img src="images/iconos/Instagram.png" width="20px"></a>
                        <a href="https://wa.me/524271184819?text=Me%20interesan%20los%20productos%20que%20ustedes%20estan%20vendiendo.%20%20Me%20comunico%20con%20ustedes%20desde%20su%20pagina%20web." target="_blank"><img src="images/iconos/WhatsApp.png" width="20px"></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>