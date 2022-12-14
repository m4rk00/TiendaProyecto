$(document).ready(function() {

    //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
    $("#foto").on("change", function() {
        var uploadFoto = document.getElementById("foto").value;
        var foto = document.getElementById("foto").files;
        var nav = window.URL || window.webkitURL;
        var contactAlert = document.getElementById('form_alert');

        if (uploadFoto != '') {
            var type = foto[0].type;
            var name = foto[0].name;
            if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
                contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
                $("#img").remove();
                $(".delPhoto").addClass('notBlock');
                $('#foto').val('');
                return false;
            } else {
                contactAlert.innerHTML = '';
                $("#img").remove();
                $(".delPhoto").removeClass('notBlock');
                var objeto_url = nav.createObjectURL(this.files[0]);
                $(".prevPhoto").append("<img id='img' src=" + objeto_url + ">");
                $(".upimg label").remove();

            }
        } else {
            alert("No selecciono foto");
            $("#img").remove();
        }
    });

    $('.delPhoto').click(function() {
        $('#foto').val('');
        $(".delPhoto").addClass('notBlock');
        $("#img").remove();

    });




    //AÑADIR/EDITAR PRODUCTOS

    $('.add_product').click(function(e) {

        e.preventDefault();
        var producto = $(this).attr('product');
        var action = 'infoProducto';
        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            async: true,
            data: { action: action, producto: producto },

            success: function(response) {
                console.log(response);
                if (response != 'error') {
                    var info = JSON.parse(response);
                    //$('#producto_id').val(info.codproducto);
                    //$('.nameProducto').html(info.descripcion);

                    $('.bodyModal').html('<form action="" method="post"name="form_add_product" accept-charset="UTF-8" id="form_add_product" onsubmit="event.preventDefault(); sendDataProduct();">' +
                        '<h1><i class="fas fa-cubes" style="font-size:45pt;"></i><br>Agregar producto</h1>' +
                        '<h2 class="nameProducto">' + info.descripcion + '</h2><br>' +
                        '<input type="number" name="cantidad" id="txtCantidad" placeholder="Cantidad del producto" required><br>' +
                        '<input type="text" name="precio" id="txtPrecio" placeholder="Precio del producto" required>' +
                        '<input type="hidden" name="producto_id" id="producto_id"  value="' + info.codproducto + '" required>' +
                        '<input type="hidden" name="action" value="addProduct"  required>' +

                        '<div class="alert alertAddProduct"></div>' +

                        '<button type="sumbit" class="btn_new "><i class="fas fa-plus"></i>Agregar</button>' +

                        '<a href="#" class="btn_cancel" onclick="coloseModal();"><i class="fas fa-ban">Cancelar</a>' +
                        '</form>');
                }


            },
            error: function(error) {
                console.log(error);
            }
        });
        $('.modal').fadeIn();
    });



    $('.del_product').click(function(e) {

        e.preventDefault();
        var producto = $(this).attr('product');
        var action = 'infoProducto';

        $.ajax({
            url: 'ajax.php',
            type: 'POST',
            async: true,
            data: { action: action, producto: producto },

            success: function(response) {
                if (response != 'error') {
                    var info = JSON.parse(response);

                    $('.bodyModal').html('<form action="" method="post" name="form_del_product" accept-charset="UTF-8" id="form_del_product" onsubmit="event.preventDefault(); delProduct();">' +
                        '<h1><i class="fas fa-cubes" style="font-size:45pt;"></i><br>Eliminar producto</h1>' +
                        '<p>¿Está seguro de eliminar el siguiente registro?</p>' +
                        '<h2 class="nameProducto">' + info.descripcion + '</h2><br>' +
                        '<input type="hidden" name="producto_id" id="producto_id"  value="' + info.codproducto + '" required>' +
                        '<input type="hidden" name="action" value="delProduct"  required>' +

                        '<div class="alert alertAddProduct"></div>' +
                        '<button type="sumbit" class="btn_ok"<i class="far fa-trash-alt"></i>Eliminar</button>' +

                        '<a href="#" class="btn_cancel" onclick="coloseModal();"><i class="fas fa-ban">Cancelar</a>' +

                        '</form>');
                }
            },
            error: function(error) {
                console.log(error);

            }
        });
        $('.modal').fadeIn();
    });

});







function sendDataProduct() {
    //alert("enviar datos");
    $('alertAddProduct').html('');



    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        async: true,
        data: $('#form_add_product').serialize(),

        success: function(response) {
            if (response == 'error') {
                $('.alertAddProduct').html('<p style="color:red">Error al agregar producto</p>')
            } else {
                var info = JSON.parse(response);
                $('.row' + info.producto_id + '.celPrecio').html(info.nuevo_precio);
                $('.row' + info.producto_id + '.celExistencia').html(info.nueva_existencia);
                $('#txtCantidad').val('');
                $('#txtPrecio').val('');
                $('.alertAddProduct').html('<p>Producto guardado</p>')
                $('#alert').fadeIn();
                $.jGrowl("La pagina se recargara!", { life: 3000 });
                $(document).ready(function() {
                    setTimeout(function() {
                        //alert('La página necesita recargarse');
                        location.reload(true);
                    }, 2000);
                });


            }

        },
        error: function(error) {
            console.log(error);
        }
    });
}


function delProduct() {

    var pr = $('#codproducto').val();
    $('alertAddProduct').html('');
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        async: true,
        data: $('#form_del_product').serialize(),

        success: function(response) {
            console.log(response);

            if (response == 'error') {
                $('.alertAddProduct').html('<p style="color:red;">Error al eliminar producto.</p>');

            } else {

                $('.row' + pr).remove();
                $('#form_del_product .btn_ok').remove();

                $('.alertAddProduct').html('<p>Producto eliminado correctamente </p>');
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
}



function coloseModal() {
    $('alertAddProduct').html('');
    $('#txtCantidad').val('');
    $('txtPrecio').val('');
    $('.modal').fadeOut();
}