<!--PROCESO DE HERENCIA-->

<!--heredar todo el contenido especifico de la plantilla base-->
<?= $this->extend("base/panel_base") ?>

<!--css especificos para cada vista-->
<?= $this->section("css") ?>
<?= $this->endSection() ?>

<!--contenido especifico para cada vista-->
<?= $this->section("contenido") ?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Formulario de usuario detalles</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!--<form id="form-usuario" action="../backend/crud/administrador/updateUsuario.php" method="post" enctype="multipart/form-data">-->
          <?php
          echo form_open('editar_usuario', ['id' => 'form_usuarioDetalles']);
          ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <label for="exampleInputEmail1">Foto perfil</label>
                <center>
                  <?php
                  $foto_perfil = (!is_null($usuario->imagenUsuario)) ? base_url(RECURSOS_PANEL_IMG_USUARIOS . "/" . $usuario->imagenUsuario) : (
                    ($usuario->sexoUsuario == SEXO_MASCULINO['clave']) ? base_url(RECURSOS_PANEL_IMG_USUARIOS . "male.webp")
                    : base_url(RECURSOS_PANEL_IMG_USUARIOS . "female.png"));
                  ?>
                  <img src="<?= $foto_perfil; ?>" class="img-rounded" alt="" id="img-preview" width="15%" style="margin-bottom: 10px;">
                  <?php
                  //Capturamos el id_usuario que vamos a editar
                  $data = array(
                    'type' => 'hidden',
                    'name' => 'idUsuario',
                    'class' => 'form-control',
                    'id' => 'idUsuario',
                    'value' => $usuario->idUsuario
                  );
                  echo form_input($data);

                  if (!is_null($usuario->imagenUsuario)) {
                    $data = array(
                      'type' => 'hidden',
                      'name' => 'foto_anterior',
                      'class' => 'form-control',
                      'id' => 'foto_anterior',
                      'value' => $usuario->imagenUsuario
                    );
                    echo form_input($data);
                  }
                  ?>
                </center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre(s)</label>
                  <?php
                  $data = array(
                    'type'  => 'text',
                    'name'  => 'name',
                    'class' => 'form-control',
                    'id'    => 'name',
                    'placeholder' => 'Nombre(s)',
                    'value' => $usuario->nombre
                  );
                  echo form_input($data);
                  ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Paterno</label>
                  <?php
                  $data = array(
                    'type'  => 'text',
                    'name'  => 'apellidoPaterno',
                    'class' => 'form-control',
                    'id'    => 'apellidoPaterno',
                    'placeholder' => 'Apellido Paterno',
                    'value' => $usuario->aP
                  );
                  echo form_input($data);
                  ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Materno</label>
                  <?php
                  $data = array(
                    'type'  => 'text',
                    'name'  => 'apellidoMaterno',
                    'class' => 'form-control',
                    'id'    => 'apellidoMaterno',
                    'placeholder' => 'ApellidoMaterno',
                    'value' => $usuario->aM
                  );
                  echo form_input($data);
                  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Rol</label>
                  <?php
                  $parametros = array(
                    'class' => 'form-control',
                    'id' => 'rol'
                  );
                  echo form_dropdown("rol", ["" => "Selecciona un rol"] + ROLES, $usuario->idRol, $parametros);
                  ?>

                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo electrónico</label>
                  <?php
                  $data = array(
                    'type'  => 'email',
                    'name'  => 'email',
                    'class' => 'form-control',
                    'id'    => 'email',
                    'placeholder' => 'Correo Electronico(ejemplo@gmail.com)',
                    'value' => $usuario->correo
                  );
                  echo form_input($data);
                  ?>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Sexo</label>
                  <?php
                  $parametros = array(
                    'class' => 'form-control',
                    'id' => 'sexo'
                  );
                  echo form_dropdown("sexo", ["" => "Selecciona un sexo"] + SEXO, $usuario->sexoUsuario, $parametros);
                  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Contraseña</label>
                  <?php
                  $data = array(
                    'type'  => 'password',
                    'name'  => 'password',
                    'class' => 'form-control',
                    'id'    => 'password',
                    'placeholder' => '********',
                  );
                  echo form_password($data);
                  ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Repetir Contraseña</label>
                  <?php
                  $data = array(
                    'type'  => 'password',
                    'name'  => 'repassword',
                    'class' => 'form-control',
                    'id'    => 'repassword',
                    'placeholder' => '********',
                  );
                  echo form_password($data);
                  ?>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="exampleInputEmail1">Foto de perfil</label>
                <?php
                $data = array(
                  'type' => 'file',
                  'name' => 'foto_perfil',
                  'class' => 'form-control',
                  'id' => 'foto_perfil',
                  'placeholder' => '',
                );
                echo form_input($data);
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!-- <button type="submit" class="btn btn-primary">Editar</button> -->
          <?= form_submit('Editar', 'Editar', ['class' => 'btn btn-primary']) ?>
          <a href="<?= route_to('usuarios') ?>" class="btn btn-danger">Cancelar</a>
        </div>
        <!-- </form> -->
        <?php echo form_close(); ?>
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">

    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<script src="<?= base_url(RECURSOS_PANEL_JS . 'globales/funcionesGlobales.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_JS . 'especificos/usuario_detalles.js') ?>"></script>
<?= $this->endSection("") ?>