<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include('../app/controllers/usuarios/listado_de_usuarios.php');?>

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
    <div class="card card-info">
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
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>#ID</th>
                        <th>Nombres</th>
                        <th>Em@il</th>
                    </tr>
                    <tbody>
                        <?php
                        
                        foreach($usuarios_datos as $usuarios_dato){?>

                          <tr>
                            <td><?php echo  $usuarios_dato['id_cliente'];?></td>
                            <td><?php echo  $usuarios_dato['nombre'];?></td>
                            <td><?php echo  $usuarios_dato['email'];?></td>
                          </tr>      

                        <?php    
                        }
                        ?>
                    </tbody>
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
