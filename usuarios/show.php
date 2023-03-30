<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/show_user.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Creacion de usuarios</h1>
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
              <h3 class="card-title">Por favor llene los campos requeridos con cuidado.</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
                <div class="row">
                  <div class="col-md-12">
                    
                      <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="name" name="nombre" class="form-control" value="<?php echo $nombres;?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email"class="form-control" value="<?php echo $email;?>" disabled>
                      </div>
                      
                      <hr>
                      <div class="form-group">
                        <a href="index.php" class="btn btn-secondary">Volver a listado de usuarios</a>
                        
                      </div>
                    
                  </div>
                </div>

            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col-md-12 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>  
  <!-- ./Contenido principal -->
</div>
<!-- /.content-wrapper -->

<?php include ('../layout/parte2.php'); ?>