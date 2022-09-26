<?php
include "php/conexion.php";
$sql = "SELECT * FROM producto";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$row = $resultado->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
<!-- Basic -->
<style>
    html{
        scroll-behavior: smooth;
    }

    section a{
        font-family: 'Just Another Hand', cursive;
        display: inline-block;
        padding: 7px 0;
        
        text-decoration: none;
        width:100px;
        text-align: center;
        border: 1px solid #FFFFFF;
        border-radius: 30px;
        background-color: #0AD7F7;
        margin-right: 5px;
        margin-left: 5px;
        font-size:20px;
        
    }


    section a:hover{
        background-color: yellow;
        font-size:50px;
        background-color:#BA09F8;
        color:  #000000;
    }
</style>
 
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
                    <h2>Productos</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> <a href="#">Productos</a> </li>
                        <li class="breadcrumb-item"><a href="index.html">Gregory Regalos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<br>


<br>




        
    <div class="row justify-content-center text-center">

            <?php
            foreach ($row as $resultado) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado['descripcion'] . $resultado['codproducto']; ?>"><img src="sistema/img/uploads/<?php echo $resultado['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado['descripcion'] . $resultado['codproducto']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado['foto']; ?>" alt="" class="card-img-top">
                                
                            </div>
                        </div>

                    <hr>  <!--INPUT ORIGINAL EN GALLERY PHP PARA VER LA IMG GRANDE-->
                    <a class="btn btn-dark" href="comprarProducto.php?id=<?php echo $resultado["codproducto"]; ?>">Comprar</a>
                    
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>
        
        </div>
        </div>
        <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
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
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
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