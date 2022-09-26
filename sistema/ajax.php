<?php
 

 include "../conexion.php";
session_start();
  //print_r($_POST);exit;

    if(!empty($_POST)){
        if($_POST['action']=='infoProducto'){
            $producto_id=$_POST['producto'];

            $query =mysqli_query($conection,"SELECT codproducto, 
                                            descripcion FROM producto 
                                            WHERE codproducto = $producto_id");
            mysqli_close($conection);


            $result=mysqli_num_rows($query);
            if($result > 0){
                $data=mysqli_fetch_assoc($query);
                echo json_encode($data,JSON_UNESCAPED_UNICODE); 
                exit;
            }
            echo 'error';
            exit;
        }


        if($_POST['action']=='addProduct')
        {
        if(!empty($_POST['cantidad']) || !empty($_POST['precio']) || !empty($_POST['producto_id'])){
            $cantidad=$_POST['cantidad'];
            $precio =$_POST['precio'];
            $producto_id=$_POST['producto_id'];
            $usuario_id=$_SESSION['idUser'];
            $query_insert=mysqli_query($conection,"INSERT INTO entradas(codproducto,cantidad,precio,usuario_id)VALUES($producto_id,$cantidad,$precio,$usuario_id)");



            if($query_insert)
            {
                //EJECUTAR PROCEDIMIENTO ALMACENADOOOO
                $query_upd=mysqli_query($conection,"CALL actualizar_precio_producto($cantidad,$precio,$producto_id)");
                $result_pro=mysqli_num_rows($query_upd);
                if($result_pro>0){
                    $data=mysqli_fetch_assoc($query_upd);
                    $data['producto_id']=$producto_id;
                    echo json_encode($data,JSON_UNESCAPED_UNICODE); 
                    exit;
                }
            }else{
                echo'error';
            }
            mysqli_close($conection);
        } else{
            echo'error';
        }
        exit;








        
    } 


        if($_POST['action']=='delProduct')
        {
       if(empty($_POST['codproducto']) || !is_numeric($_POST['codproducto'])){
           echo 'error';
       }
       else{
           $codproducto=$_POST['codproducto'];

           $query_delete=mysqli_query($conection,"DELETE FROM producto WHERE codproducto=$codproducto");
           mysqli_close($conection);
           if($query_delete){
            header("location: lista_productos.php");
           }else{
            echo "Error al eliminar";
           }
       }
    }
 exit;

    }
   
 //Agregar productos
         
       


    


    
?>