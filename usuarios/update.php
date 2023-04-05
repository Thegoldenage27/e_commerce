

<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controllers/usuarios/update_user.php');
include ('../app/controllers/roles/listado_de_roles.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Actualizar datos de usuario</h1>
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
          <div class="card card-success">
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
                    
                  <form action="../app/controllers/usuarios/update.php" method="post">

                          <input type="text" name="id_usuario" value="<?php echo $id_usuario_get; ?>" hidden>

                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" name="nombre" class="form-control" value="<?php  echo $nombres;?>" placeholder="Actualice el nombre del usuario"required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Actualice el email del usuario"required>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                          <label for="email">Rol del usuario</label>
                          <select name="rol" id="" class="form-control">
                            <?php 
                            foreach($roles_datos as $roles_dato){ 
                              $rol_tabla = $roles_dato['rol'];
                              $id_rol = $roles_dato['id_rol'];
                              ?>
                              <option value="<?php  echo $id_rol;?>"<?php if($rol_tabla == $rol){ ?> selected="selected"<?php }
                               ?>><?php echo $rol_tabla; ?></option>
                              <?php } ?>
                          </select>
                        </div>

                        </div>
                        <div class="form-group">
                          <label for="password_user">Password</label>
                          <input type="password" name="password_user" class="form-control" placeholder="Actualice el password del usuario">
                        </div>
                        <div class="form-group">
                          <label for="password_repeat">Confirme password</label>
                          <input type="password" name="password_repeat" class="form-control" placeholder="Confirme el password del usuario">
                        </div>   
                        <hr>
                        <div class="form-group">
                          <a href="index.php" class="btn btn-secondary">Cancelar</a>
                          <button type="submit" class="btn btn-success">Actualizar y Guardar</button>
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

