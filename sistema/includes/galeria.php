<?php
include "php/conexion.php";
$sql = "SELECT * FROM cat";
$resultado = $pdo->prepare($sql);
$resultado->execute();
$row = $resultado->fetchAll();
$i = "SELECT COUNT(*) from cat"
?>



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