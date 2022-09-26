<?php 
	
	session_start();

	include "conexion.php";

	//Mostrar Datos
	/*if(empty($_REQUEST['id']))
	{
		header('Location: productos.php');
		mysqli_close($conection);
	}*/
	$idproducto = $_REQUEST['id'];

	$sql= mysqli_query($conection,"SELECT descripcion,info,foto,codproducto,precio
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

<!doctype html>
<html lang="en">

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
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="socialbar.css">

    
</head>

<body>

    <div class="site-wrap">

        <!--Header-->
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


    <br>
    <br>
    <br>
        <!-- site-header -->
        <div class="main-wrap">
            <div class="cover_2 cover_sm">
                <div class="img_bg" style="background-image: url(/img/slider.jpg);" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7" data-aos="fade-up">
                                <center>
                                    <hr>
                                    <h1 class="mb-4">PRODUCTO<hr></h1>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .cover_1 -->
            <br>
      
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7" data-aos="fade-up">
                            
                        <img  src="<?php echo $foto; ?>" alt="<?php echo $data["descripcion"]; ?>" alt="Image placeholder" class="img-fluid imgs">
                        <style>
                            .imgs {
                                width: 500px;
                                height: 500px;
                                display:block;
                                margin:auto;
                            }

                            @media only screen and (max-width: 753px) {
                                .imgs {
                                    width: 250px;
                                    height: 250px;
                                    display:block;
                                    margin:auto;
                                }
                            }
                        </style>

                        </div>
                        <div class="col-md-5 pl-md-5" data-aos="fade-up" data-aos-delay="200">
                            <center>
                                <hr>
                                <h1 class="heading"><?php echo $nombre;?></h1>
                                <hr><br>
                                <p>
                                    <table style="border: 1px solid gray;">
                                        <tr style="border: 1px solid gray;">
                                            <th style="padding:15px; border: 1px solid gray;">Descripción</th>
                                            <th style="padding:15px; border: 1px solid gray;">Precio</th>
                                        </tr>

                                        <tr>
                                            <th style="text-align: center; padding:15px; border: 1px solid gray;"><?php echo $info;?></th>
                                            <th style="text-align: center; padding:15px; border: 1px solid gray;">$<?php echo $precio;?></th>
                                        </tr>                                       
                                    </table>
                                </p>

                            </center><br><br>
                            <p>
                                <center><h1>¡Comprar Ahora!</h1></center>
                            </p><br><hr>
                            <p>
                                <a class="btn btn-primary btn-lg btn-block" href="comprar_envio.php?id=<?php echo $codproducto; ?>">Envio a casa</a>
                            </p>
                            <br>
                            <p>
                                <a class="btn btn-secondary btn-lg btn-block" href="comprar_tienda.php?id=<?php echo $codproducto; ?>">Pasar por el a tienda</a>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .main-wrap -->

        

       

    </div>
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
    <script src="js/main.js"></script>
</body>

</html>