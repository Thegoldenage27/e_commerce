<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include('../app/controllers/categorias/listado_de_categoria.php');



?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de categorias
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                            data-target="#modal-create">
                            <i class="fa fa-plus"></i> Nueva categoría
                        </button>
                    </h1>


                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Contenido principal -->
    <div class="content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark">

                        <div class="card-header">

                            <h3 class="card-title">Categorias registrados</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                        class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>#ID Categoria</center>
                                        </th>
                                        <th>
                                            <center>Nombre de la categoria</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $contador =0;
                  foreach($categorias_datos as $categorias_dato){
                    $id_categoria = $categorias_dato['id_categoria'];
                    $nombre_categoria = $categorias_dato['nombre_categoria']; ?>

                                    <tr>
                                        <td>
                                            <center><?php echo  $contador = $contador +1;?></center>
                                        </td>
                                        <td>
                                            <center><?php echo  $categorias_dato['nombre_categoria'];?></center>
                                        </td>


                                        <td>
                                            <center>
                                            <div class="btn-group">
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-update<?php echo $id_categoria; ?>">
        <i class="fa fa-pencil-alt"></i> Editar
    </button>
    <!-- Modal para actualizar categorias -->
    <div class="modal fade" id="modal-update<?php echo $id_categoria; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #08780A;color: white">
                    <h4 class="modal-title">Actualización de la categoria</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nombre de la categoria</label>
                                <input type="text" id="nombre_categoria<?php echo $id_categoria; ?>" class="form-control" value="<?php echo $nombre_categoria; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="btn_update<?php echo $id_categoria; ?>">Actualizar categoria</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div id="respuesta_update<?php echo $id_categoria; ?>"></div>
</div>

<script>
    $(document).ready(function() {
        // Obtener el id del botón de actualizar
        var btn_update = $('#btn_update<?php echo $id_categoria; ?>');
        // Escuchar el evento click del botón de actualizar
        btn_update.on('click', function() {
            // Obtener los datos a enviar
            var nombre_categoria = $('#nombre_categoria<?php echo $id_categoria; ?>').val();
            var id_categoria = '<?php echo $id_categoria; ?>';
            var url = "../app/controllers/categorias/update_de_categorias.php";
            // Realizar la petición AJAX para actualizar la categoría
            $.get(url, {
                nombre_categoria: nombre_categoria,
                id_categoria: id_categoria
            }, function(data) {
                // Mostrar la respuesta en el div correspondiente
                $('#respuesta_update<?php echo $id_categoria; ?>').html(data);
            });
        });
    });
</script>

                                            </center>
                                        </td>


                                    </tr>

                                    <?php    
                  }
                  ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>
                                            <center>#ID Categoria</center>
                                        </th>
                                        <th>
                                            <center>Nombre de la categoria</center>
                                        </th>
                                        <th>
                                            <center>Acciones</center>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>


                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>



            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- ./Contenido principal -->
</div>
<!-- /.content-wrapper -->


<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>


<script>
$(function() {
    $("#example1").DataTable({
        /* cambio de idiomas de datatable */
        "pageLength": 10,
        language: {
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Categorias",
            "infoEmpty": "Mostrando 0 a 0 de 0 Categorias",
            "infoFiltered": "(Filtrado de _MAX_ total Categorias)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Categorias",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscador:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
        /* fin de idiomas */
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        buttons: [{
            extend: 'collection',
            text: "Reportes",
            orientation: 'landscape',
            buttons: [{
                text: 'Copiar',
                extend: 'copy'
            }, {
                text: 'PDF',
                extend: 'pdf'
            }, {
                text: 'CSV',
                extend: 'csv'
            }, {
                text: 'Excel',
                extend: 'excel'
            }, {
                text: 'Imprimir',
                extend: 'print'
            }]
        }, {
            extend: 'colvis',
            text: 'Visor de columnas',
            collectionLayout: 'fixed three-column'
        }]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});
</script>

<!-- **********************Modal para registrar categorias******************************-->

<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #087773;color: white">
                <h4 class="modal-title">Creación de una nueva categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">  
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nombre de la categoria</label>
                            <input type="text" id="nombre_categoria" class="form-control">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-info" id="btn_create">Guardar categoria</button>

            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
$('#btn_create').click(function() {
    //alert("guardar");
    var nombre_categoria = $('#nombre_categoria').val();

    var url = "../app/controllers/categorias/registro_de_categorias.php";
    $.get(url, {
        nombre_categoria: nombre_categoria
    }, function(datos) {
        $('#respuesta').html(datos);
        //alert("fue al controlador");
    });

});
</script>
<div id="respuesta"></div>