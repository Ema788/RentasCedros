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
            <h3 class="card-title">Formulario de nueva proyección</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
          <!-- <form id="form-usuario" action="../backend/crud/proyecciones/insertProyeccion.php" method="post" enctype="multipart/form-data"> -->
          <?php
              $attributes = array('id' => 'form_proyeccionNueva');
              echo form_open('proyeccionNueva', $attributes);
              ?>  
          <div class="card-body">
              <br>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Película que será proyectada</label>
                    <select class="form-control" name="pelicula">
                      <option value="">Seleccionar un horario</option>
                      <?php
                      $html = '';
                      if (isset($peliculas) && sizeof($peliculas) > 0) {
                        foreach ($peliculas as $nomPeliculas) {
                          $html .= '
                                  <option value="' . $nomPeliculas['idPelicula'] . '"> ' . $nomPeliculas['nombrePelicula'] . ' </option>
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
                    <label for="exampleInputEmail1">Horario</label>
                    <select class="form-control" name="horario">
                      <option value="">Seleccionar un horario</option>
                      <?php
                      $html = '';
                      if (isset($horarios) && sizeof($horarios) > 0) {
                        foreach ($horarios as $horariosPeliculas) {
                          $html .= '
                                  <option value="' . $horariosPeliculas['idHorario'] . '">' . $horariosPeliculas['horaProyeccion'] . '</option>
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
                    <label for="exampleInputEmail1">Sala</label>
                    <select class="form-control" name="tipoSala">
                      <option value="">Seleccionar un rol</option>
                      <?php
                      $html = '';
                      if (isset($tipoSalas) && sizeof($tipoSalas) > 0) {
                        foreach ($tipoSalas as $tipoSala) {
                          $html .= '
                                  <option value="' . $tipoSala['idSala'] . '"> ' . $tipoSala['idSala'] . ' ' . $tipoSala['tipoSala'] . ' ' . $tipoSala['nombreSucursal'] . '</option>
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
            <?= form_submit('Guardar', 'Guardar', ['class' => 'form-control btn btn-primary rounded submit px-3'])?>
              <a href="<?= route_to('proyeccion')?>" class="btn btn-danger">Cancelar</a>
            </div>
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