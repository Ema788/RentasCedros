<!--PROCESO DE HERENCIA-->

<!--heredar todo el contenido especifico de la plantilla base-->
<?= $this->extend("base/panel_base") ?>

<!--css especificos para cada vista-->
<?= $this->section("css") ?>
<?= $this->endSection() ?>

<!--contenido especifico para cada vista-->
<?= $this->section("contenido") ?>
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- jquery validation -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Formulario de perfil</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php
        $attributes = array('id' => 'form_perfil');
        echo form_open('perfil', $attributes);
        ?>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <center>
                <img src="<?php echo base_url(RECURSOS_PANEL_IMG . 'usuario.png'); ?>" class="img-rounded" alt="" width="10%">
              </center>
            </div>
          </div>
          <input type="hidden" value="<?php #echo $usuario['imagenUsuario']; 
                                      ?>" name="foto_perfil_actual">
          <br>
          <input type="hidden" value="<?php #echo $usuario['idUsuario']; 
                                      ?>" name="idUsuario">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre(s)</label>
                <?php
                $data = array(
                  'type'  => 'text',
                  'class' => 'form-control',
                  'placeholder' => 'Nombre(s)',
                  'id'    => 'name',
                  'name'  => 'name',
                  'required' => 'true',
                  'value' => $nombre
                );
                echo form_input($data);
                ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Apellido Paterno</label>
                <!--  <input type="text" value="<?php #echo $usuario['ApellidoPaterno']; 
                                                ?>" name="ApellidoPaterno" class="form-control" id="ApellidoPaterno" placeholder="Apelldio Paterno"> -->
                <?php
                $data = array(
                  'type'  => 'text',
                  'class' => 'form-control',
                  'placeholder' => 'Apellido Paterno',
                  'id'    => 'apellidoPaterno',
                  'name'  => 'apellidoPaterno',
                  'required' => 'true',
                  'value' => $aP
                );
                echo form_input($data);
                ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Apellido Materno</label>
                <!-- <input type="text" value="<?php #echo $usuario['apellidoMaterno']; 
                                                ?>" name="apellidoMaterno" class="form-control" id="apellidoMaterno" placeholder="Apelldio Paterno"> -->
                <?php
                $data = array(
                  'type'  => 'text',
                  'class' => 'form-control',
                  'placeholder' => 'Apellido Materno',
                  'id'    => 'apellidoMaterno',
                  'name'  => 'apellidoMaterno',
                  'required' => 'true',
                  'value' => $aM
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
                $options = [
                  '' => 'Seleccionar un rol',
                  '1'  => 'Cliente',
                  '2'    => 'Administrador',
                ];
                echo form_dropdown('rol', $options, $idRol, ['class' => 'form-control']);
                ?>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <!--  <input type="email" name="correo" value="<?php # echo $usuario["correo"]; 
                                                                ?>" class="form-control" id="correo" placeholder="Correo electrónico"> -->
                <?php
                $data = array(
                  'type'  => 'email',
                  'class' => 'form-control',
                  'placeholder' => 'Ejemplo:correo@gmail.com',
                  'id'    => 'email',
                  'name'  => 'email',
                  'required' => 'email',
                  'value' => $correo
                );
                echo form_input($data);
                ?>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <!-- <input type="password" name="password" class="form-control" id="password" placeholder="***********"> -->
                <?php
                $data = array(
                  'type'  => 'password',
                  'class' => 'form-control',
                  'placeholder' => '********',
                  'id'    => 'password',
                  'name'  => 'password',
                  'required' => 'true'
                );
                echo form_password($data);
                ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Repetir Contraseña</label>
                <!--  <input type="password" name="repassword" class="form-control" id="repassword" placeholder="***********"> -->
                <?php
                $data = array(
                  'type'  => 'repassword',
                  'class' => 'form-control',
                  'placeholder' => '********',
                  'id'    => 'repassword',
                  'name'  => 'repassword',
                  'required' => 'true'
                );
                echo form_password($data);
                ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="exampleInputEmail1">Foto perfil</label>
              <input type="file" name="foto_perfil" id="foto_perfil" onchange="" class="form-control">
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!-- <button type="submit" class="btn btn-primary">Editar</button> -->
          <?= form_submit('Editar', 'Editar', ['class' => 'btn btn-primary rounded submit px-3']) ?>
          <a href="./usuarios.php" class="btn btn-danger">Cancelar</a>
        </div>
        </form>
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
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>