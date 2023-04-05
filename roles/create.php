<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Registro de un nuevo Rol</h1>
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
                    <form action="../app/controllers/roles/create.php" method="post">
                      <div class="form-group">
                        <label for="">Nombre del Rol</label>
                        <input type="name" name="rol" class="form-control" placeholder="Escriba el nombre del nuevo Rol"required>
                      </div>
                        
                      <hr>
                      <div class="form-group">
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                        <button tyoe="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
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

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>
 