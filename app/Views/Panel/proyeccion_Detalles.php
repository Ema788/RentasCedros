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
            <h3 class="card-title">Formulario de detalles</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!-- <form id="form-usuario" action="../backend/crud/proyecciones/updateProyeccion.php" method="post" enctype="multipart/form-data"> -->
          <?php
              $attributes = array('id' => 'form_proyeccionDetalles');
              echo form_open('proyeccionDetalles', $attributes);
          ?>
          <div class="card-body">
              <br>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Película proyectada</label>
                    <?php
                      $data = array(
                      'type'  => 'text',
                      'name'  => 'peliculaProyectada',
                      'class' => 'form-control',
                      ' id'    => 'name',
                      'placeholder' => 'Pelicula Proyectada',
                      'required' => 'true'
                      );
                      echo form_input($data);
                    ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Horario</label>
                    <select class="form-control" name="horaProyeccion">
                      <option value="">Seleccionar un horario</option>
                      <?php
                      $html = '';
                      if (isset($horarios) && sizeof($horarios) > 0) {
                        foreach ($horarios as $horariosPeliculas) {
                          $html .= '
                                  <option> ' . $horariosPeliculas['horaProyeccion'] . ' </option>
                                ';
                        }
                      }
                      echo $html;
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sucursal</label>
                    <select class="form-control" name="sucursal">
                      <option value="">Seleccionar un rol</option>
                      <?php
                      $html = '';
                      if (isset($sucursales) && sizeof($sucursales) > 0) {
                        foreach ($sucursales as $nSucursales) {
                          $html .= '
                                  <option> ' . $nSucursales['nombreSucursal'] . ' </option>
                                ';
                        }
                      }
                      echo $html;
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipo de sala</label>
                    <select class="form-control" name="tipoSala">
                      <option value="">Seleccionar un rol</option>
                      <?php
                      $html = '';
                      if (isset($tipoSalas) && sizeof($tipoSalas) > 0) {
                        foreach ($tipoSalas as $tipoSala) {
                          $html .= '
                                  <option> ' . $tipoSala['tipoSala'] . ' ' . $tipoSala['nombreSucursal'] . '</option>
                                ';
                        }
                      }
                      echo $html;
                      ?>
                    </select>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Editar</button>
              <a href="<?= route_to('proyeccion')?>" class="btn btn-danger">Cancelar</a>
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
<?= $this->endSection("") ?>