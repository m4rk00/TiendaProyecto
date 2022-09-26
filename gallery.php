<?php
include "php/conexion.php";
$sql = "SELECT * FROM imagen_card WHERE cat='1'";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$row = $resultado->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='2'";
$resultado2 = $pdo->prepare($sql);
$resultado2->execute();
$row2 = $resultado2->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='3'";
$resultado3 = $pdo->prepare($sql);
$resultado3->execute();
$row3 = $resultado3->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='4'";
$resultado4 = $pdo->prepare($sql);
$resultado4->execute();
$row34 = $resultado4->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='5'";
$resultado5 = $pdo->prepare($sql);
$resultado5->execute();
$row35 = $resultado5->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='6'";
$resultado6 = $pdo->prepare($sql);
$resultado6->execute();
$row36 = $resultado6->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='7'";
$resultado7 = $pdo->prepare($sql);
$resultado7->execute();
$row37 = $resultado7->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='8'";
$resultado8 = $pdo->prepare($sql);
$resultado8->execute();
$row38 = $resultado8->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='9'";
$resultado9 = $pdo->prepare($sql);
$resultado9->execute();
$row39 = $resultado9->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='10'";
$resultado10 = $pdo->prepare($sql);
$resultado10->execute();
$row311 = $resultado10->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='11'";
$resultado11 = $pdo->prepare($sql);
$resultado11->execute();
$row311 = $resultado11->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='12'";
$resultado12 = $pdo->prepare($sql);
$resultado12->execute();
$row312 = $resultado12->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='13'";
$resultado13 = $pdo->prepare($sql);
$resultado13->execute();
$row313 = $resultado13->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='14'";
$resultado14 = $pdo->prepare($sql);
$resultado14->execute();
$row314 = $resultado14->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='15'";
$resultado15 = $pdo->prepare($sql);
$resultado15->execute();
$row315 = $resultado15->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='16'";
$resultado16 = $pdo->prepare($sql);
$resultado16->execute();
$row316 = $resultado16->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='17'";
$resultado17 = $pdo->prepare($sql);
$resultado17->execute();
$row317 = $resultado17->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='18'";
$resultado18 = $pdo->prepare($sql);
$resultado18->execute();
$row318 = $resultado18->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='19'";
$resultado19 = $pdo->prepare($sql);
$resultado19->execute();
$row319 = $resultado19->fetchAll();
?>
<?php
$sql = "SELECT * FROM imagen_card WHERE cat='20'";
$resultado20 = $pdo->prepare($sql);
$resultado20->execute();
$row320 = $resultado20->fetchAll();
?>


<?php
$sql = "SELECT cat FROM cat WHERE codcat='1'";
$catnom = $pdo->prepare($sql);
$catnom->execute();
$rowe = $catnom->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='2'";
$catnom2 = $pdo->prepare($sql);
$catnom2->execute();
$row4 = $catnom2->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='3'";
$catnom3 = $pdo->prepare($sql);
$catnom3->execute();
$row5 = $catnom3->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='4'";
$catnom4 = $pdo->prepare($sql);
$catnom4->execute();
$row54 = $catnom4->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='5'";
$catnom5 = $pdo->prepare($sql);
$catnom5->execute();
$row55 = $catnom5->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='6'";
$catnom6 = $pdo->prepare($sql);
$catnom6->execute();
$row56 = $catnom6->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='7'";
$catnom7 = $pdo->prepare($sql);
$catnom7->execute();
$row57 = $catnom7->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='8'";
$catnom8 = $pdo->prepare($sql);
$catnom8->execute();
$row58 = $catnom8->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='9'";
$catnom9 = $pdo->prepare($sql);
$catnom9->execute();
$row59 = $catnom9->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='10'";
$catnom10 = $pdo->prepare($sql);
$catnom10->execute();
$row510 = $catnom10->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='11'";
$catnom11 = $pdo->prepare($sql);
$catnom11->execute();
$row511 = $catnom11->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='12'";
$catnom12 = $pdo->prepare($sql);
$catnom12->execute();
$row512 = $catnom12->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='13'";
$catnom13 = $pdo->prepare($sql);
$catnom13->execute();
$row513 = $catnom13->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='14'";
$catnom14 = $pdo->prepare($sql);
$catnom14->execute();
$row514 = $catnom14->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='15'";
$catnom15 = $pdo->prepare($sql);
$catnom15->execute();
$row515 = $catnom15->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='16'";
$catnom16 = $pdo->prepare($sql);
$catnom16->execute();
$row516 = $catnom16->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='17'";
$catnom17 = $pdo->prepare($sql);
$catnom17->execute();
$row517 = $catnom17->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='18'";
$catnom18 = $pdo->prepare($sql);
$catnom18->execute();
$row518 = $catnom18->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='19'";
$catnom19 = $pdo->prepare($sql);
$catnom19->execute();
$row519 = $catnom19->fetchAll();
?>
<?php
$sql = "SELECT cat FROM cat WHERE codcat='20'";
$catnom20 = $pdo->prepare($sql);
$catnom20->execute();
$row520 = $catnom10->fetchAll();
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
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="socialbar.css">
    

</head>

<body>

<style>
    html{
        scroll-behavior: smooth;
    }

    section a{
        font-family: 'Just Another Hand';
        display: inline-block;
        padding: 7px 0;
        text-decoration: none;
        text-align: center;
        border: 1px solid #FFFFFF;
        border-radius: 10px;
        background-color: #0AD7F7;
        margin-right: 5px;
        margin-left: 5px;
        font-size:20px;

    }


    section a:hover{
        background: #a945c7;
        box-shadow: 0 0 10px #a945c7, 0 0 40px #a945c7, 0 0 80px #a945c7;
        transition-delay: 1s;
        font-size:25px;
        background-color:#BA09F8;
        color:  #000000;
    }


    .btn-neon{
        position: relative;
        display: inline-block;
        padding: 5px 10px;
        color: black;
        text-decoration: none;
        font-size: 3vmin;
        overflow: hidden;
        transition: 0.2s;
    }

    .btn-neon:hover{
       background: #a945c7;
       box-shadow: 0 0 5px #a945c7, 0 0 10px #a945c7, 0 0 20px #a945c7;
       transition-delay: 1s;
    }

    .btn-neon span{
       position: absolute;
       display: block;
    }

    #span1{
        top: 0;
        left: -100%;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, transparent,#a945c7);
    }

    .btn-neon:hover #span1{
        left: 100%;
        transition: 1s;
    }

    #span3{
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 3px;
        background: linear-gradient(270deg, transparent,#a945c7);
    }

    .btn-neon:hover #span3{
        right: 100%;
        transition: 1s;
        transition-delay: 0.5s;
    }

    #span2{
        top: -100%;
        right: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(180deg,transparent,#a945c7);
    }

    .btn-neon:hover #span2{
        top: 100%;
        transition: 1s;
        transition-delay: 0.25s;
    }

    #span4{
        bottom: -100%;
        left: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(360deg,transparent,#a945c7);
    }

    .btn-neon:hover #span4{
        bottom: 100%;
        transition: 1s;
        transition-delay: 0.75s;
    }
</style>

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
                    <h2>Galeria</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"> <a href="#">Galeria</a> </li>
                        <li class="breadcrumb-item"><a href="index.html">Gregory Regalos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<br><br>
<div style="text-align:center">
<?php foreach ($rowe as $catnom); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec1" class="btn-neon"><?php echo $catnom['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row4 as $catnom2); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec2" class="btn-neon"><?php echo $catnom2['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row5 as $catnom3); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec3" class="btn-neon"><?php echo $catnom3['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row54 as $catnom4); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec4"class="btn-neon"><?php echo $catnom4['cat']; ?> 
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row55 as $catnom5); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec5" class="btn-neon"><?php echo $catnom5['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row56 as $catnom6); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec6" class="btn-neon"><?php echo $catnom6['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row57 as $catnom7); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec7" class="btn-neon"><?php echo $catnom7['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row58 as $catnom8); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec8" class="btn-neon"><?php echo $catnom8['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row59 as $catnom9); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec9" class="btn-neon"><?php echo $catnom9['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>

<?php foreach ($row510 as $catnom10); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec10" class="btn-neon"><?php echo $catnom10['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row511 as $catnom11); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec11" class="btn-neon"><?php echo $catnom11['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row512 as $catnom12); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec12" class="btn-neon"><?php echo $catnom12['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row513 as $catnom13); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec13" class="btn-neon"><?php echo $catnom13['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row514 as $catnom14); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec14" class="btn-neon"><?php echo $catnom14['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row515 as $catnom15); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec15" class="btn-neon"><?php echo $catnom15['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row516 as $catnom16); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec16" class="btn-neon"><?php echo $catnom16['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row517 as $catnom17); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec17" class="btn-neon"><?php echo $catnom17['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row518 as $catnom18); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec18" class="btn-neon"><?php echo $catnom18['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row519 as $catnom19); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec19" class="btn-neon"><?php echo $catnom19['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
<?php foreach ($row520 as $catnom20); ?>
<section id="CATEGORIAS" style="  display: inline-block;">
<a href="#sec20" class="btn-neon"><?php echo $catnom20['cat']; ?>
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
</a>
</section>
</div>

<br>
        <section id="sec1"></section>
        <?php
        foreach ($rowe as $catnom);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom['cat'];
        ?></h1>
        <hr>

    <div class="row justify-content-center text-center">

            <?php
            foreach ($row as $resultado) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado['descripcion'] . $resultado['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado['descripcion'] . $resultado['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado['descripcion'] . $resultado['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>
        


        <br>
        <section id="sec2"></section>
        <?php
        foreach ($row4 as $catnom2);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom2['cat'];
        ?></h1>
        <hr>

        <br>
        <div class="row justify-content-center text-center">
            <?php
            foreach ($row2 as $resultado2) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado2['descripcion'] . $resultado2['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado2['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado2['descripcion'] . $resultado2['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado2['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado2['descripcion'] . $resultado2['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec3"></section>
        <?php
        foreach ($row5 as $catnom3);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom3['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row3 as $resultado3) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado3['descripcion'] . $resultado3['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado3['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado3['descripcion'] . $resultado3['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado3['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado3['descripcion'] . $resultado3['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>


        <br>
        <section id="sec4"></section>
        <?php
        foreach ($row54 as $catnom4);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom4['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row34 as $resultado4) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado4['descripcion'] . $resultado4['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado4['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado4['descripcion'] . $resultado4['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado4['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado4['descripcion'] . $resultado4['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>
 


        <br>
        <section id="sec5"></section>
        <?php
        foreach ($row55 as $catnom5);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom5['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row35 as $resultado5) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado5['descripcion'] . $resultado5['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado5['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado5['descripcion'] . $resultado5['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado5['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado5['descripcion'] . $resultado5['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec6"></section>
        <?php
        foreach ($row56 as $catnom6);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom6['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row36 as $resultado6) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado6['descripcion'] . $resultado6['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado6['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado6['descripcion'] . $resultado6['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado6['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado6['descripcion'] . $resultado6['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec7"></section>
        <?php
        foreach ($row57 as $catnom7);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom7['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row37 as $resultado7) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado7['descripcion'] . $resultado7['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado7['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado7['descripcion'] . $resultado7['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado7['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado7['descripcion'] . $resultado7['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec8"></section>
        <?php
        foreach ($row58 as $catnom8);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom8['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row38 as $resultado8) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado8['descripcion'] . $resultado8['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado8['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado8['descripcion'] . $resultado8['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado8['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado8['descripcion'] . $resultado8['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec9"></section>
        <?php
        foreach ($row59 as $catnom9);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom9['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row39 as $resultado9) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado9['descripcion'] . $resultado9['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado9['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado9['descripcion'] . $resultado9['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado9['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado9['descripcion'] . $resultado9['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec10"></section>
        <?php
        foreach ($row510 as $catnom10);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom10['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row311 as $resultado11) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado11['descripcion'] . $resultado11['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado11['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado11['descripcion'] . $resultado11['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado11['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado11['descripcion'] . $resultado11['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>
        


        <br>
        <section id="sec11"></section>
        <?php
        foreach ($row511 as $catnom11);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom11['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row311 as $resultado11) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado11['descripcion'] . $resultado11['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado11['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado11['descripcion'] . $resultado11['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado11['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado11['descripcion'] . $resultado11['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec12"></section>
        <?php
        foreach ($row512 as $catnom12);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom12['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row312 as $resultado12) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado12['descripcion'] . $resultado12['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado12['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado12['descripcion'] . $resultado12['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado12['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado12['descripcion'] . $resultado12['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec13"></section>
        <?php
        foreach ($row513 as $catnom13);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom13['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row313 as $resultado13) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado13['descripcion'] . $resultado13['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado13['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado13['descripcion'] . $resultado13['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado13['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado13['descripcion'] . $resultado13['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec14"></section>
        <?php
        foreach ($row514 as $catnom14);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom14['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row314 as $resultado14) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado14['descripcion'] . $resultado14['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado14['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado14['descripcion'] . $resultado14['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado14['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado14['descripcion'] . $resultado14['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec15"></section>
        <?php
        foreach ($row515 as $catnom15);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom15['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row315 as $resultado15) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado15['descripcion'] . $resultado15['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado15['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado15['descripcion'] . $resultado15['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado15['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado15['descripcion'] . $resultado15['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec16"></section>
        <?php
        foreach ($row516 as $catnom16);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom16['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row316 as $resultado16) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado16['descripcion'] . $resultado16['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado16['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado16['descripcion'] . $resultado16['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado16['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado16['descripcion'] . $resultado16['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec17"></section>
        <?php
        foreach ($row517 as $catnom17);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom17['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row317 as $resultado17) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado17['descripcion'] . $resultado17['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado17['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado17['descripcion'] . $resultado17['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado17['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado17['descripcion'] . $resultado17['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec18"></section>
        <?php
        foreach ($row518 as $catnom18);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom18['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row318 as $resultado18) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado18['descripcion'] . $resultado18['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado18['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado18['descripcion'] . $resultado18['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado18['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado18['descripcion'] . $resultado18['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec19"></section>
        <?php
        foreach ($row519 as $catnom19);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom19['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row319 as $resultado19) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado19['descripcion'] . $resultado19['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado19['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado19['descripcion'] . $resultado19['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado19['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado19['descripcion'] . $resultado19['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



        <br>
        <section id="sec20"></section>
        <?php
        foreach ($row520 as $catnom20);
        ?>
        <h1 style="text-align: center; font-size:5rem">
        <?php
        echo $catnom20['cat'];
        ?></h1>
        <hr>

        <div class="row justify-content-center text-center">
            <?php
            foreach ($row320 as $resultado20) :
            ?>
                <div class="col-lg-4 col-xl-4 col-md-4 col-sm-6 pb-2">
                    
                        <a href="" data-toggle="modal" data-target="<?php echo '#' . $resultado20['descripcion'] . $resultado20['id']; ?>"><img src="sistema/img/uploads/<?php echo $resultado20['foto']; ?>" alt="" class="card-img-top" style="width:25rem; height:25rem; border:auto;"></a>
                        <div class="modal fade" id="<?php echo $resultado20['descripcion'] . $resultado20['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered justify-content-center text-center" role="document">
                                <img src="sistema/img/uploads/<?php echo $resultado20['foto']; ?>" alt="" class="card-img-top">
                            </div>
                        </div>

                    <hr>
                    <input type="button" class="btn btn-dark"  value="Visualizar" data-toggle="modal" data-target="<?php echo '#' . $resultado20['descripcion'] . $resultado20['id']; ?>">
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <br>



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
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
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