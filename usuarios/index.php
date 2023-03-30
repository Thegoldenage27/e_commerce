<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include('../app/controllers/usuarios/listado_de_usuarios.php');

if(isset($_SESSION['mensaje'])){
  $respuesta = $_SESSION['mensaje'];?>
<script>

Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: '<?php echo $respuesta;?>',
  showConfirmButton: false,
  timer: 2000
})

</script>

<?php

unset($_SESSION['mensaje']);

}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Lista de usuarios</h1>
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
              
                <h3 class="card-title">Usuarios registrados</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th><center>#ID</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Em@il</center></th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                        $contador =0;
                        foreach($usuarios_datos as $usuarios_dato){?>

                          <tr>
                            <td><center><?php echo  $contador = $contador +1;?></center></td>
                            <td><center><?php echo  $usuarios_dato['nombre'];?></center></td>
                            <td><center><?php echo  $usuarios_dato['email'];?></center></td>
                          </tr>      

                        <?php    
                        }
                        ?>
                    </tbody>
                  
                  <tfoot>
                  <tr>
                        <th><center>#ID</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Em@il</center></th>
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

  

  <?php include ('../layout/parte2.php'); ?>

  
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

