<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include('../app/controllers/almacen/listado_de_productos.php');



?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de productos</h1>
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
      
        <h3 class="card-title">Productos registrados</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
        <!-- /.card-header -->
        <div class="card-body">
          

        <table id="example1" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center">ID</th>
      <th class="text-center">Código</th>
      <th class="text-center">Categoria</th>
      <th class="text-center">Imagen</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Descripción</th>
      <th class="text-center">Stock</th>
      <th class="text-center">Stock min</th>
      <th class="text-center">Stock max</th>
      <th class="text-center">$ Compra</th>
      <th class="text-center">$ Venta</th>
      <th class="text-center">Fecha de compra</th>
      <th class="text-center">Em@il usuario</th>
      
      <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contador = 0;
    foreach ($productos_datos as $productos_dato) { 
    ?>
      <tr>
        <td><?php echo $contador = $contador +1; ?></td>
        <td><?php echo $productos_dato['codigo'];?></td>
        <td><?php echo $productos_dato['categoria'];?></td>
        <td><?php echo $productos_dato['imagen'];?></td>
        <td><?php echo $productos_dato['nombre'];?></td>
        <td><?php echo $productos_dato['descripcion'];?></td>
        <td><?php echo $productos_dato['stock'];?></td>
        <td><?php echo $productos_dato['stock_minimo'];?></td>
        <td><?php echo $productos_dato['stock_maximo'];?></td>
        <td><?php echo $productos_dato['precio_compra'];?></td>
        <td><?php echo $productos_dato['precio_venta'];?></td>
        <td><?php echo $productos_dato['fecha_ingreso'];?></td>
        <td><?php echo $productos_dato['email'];?></td>
        <td>
            
        </td>
        
      </tr>
    <?php    
    }
    ?>
  </tbody>
  <tfoot></tfoot>
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
  $(function () {
    $("#example1").DataTable({
      /* cambio de idiomas de datatable */
      "pageLength": 10,
          language: {
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
              "infoEmpty": "Mostrando 0 a 0 de 0 Roles",
              "infoFiltered": "(Filtrado de _MAX_ total Roles)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Roles",
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
      "responsive": true, "lengthChange": true, "autoWidth": false,
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

