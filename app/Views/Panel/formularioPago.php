<!--PROCESO DE HERENCIA-->

<!--heredar todo el contenido especifico de la plantilla base-->
<?= $this->extend("base/panel_base") ?>

<!--css especificos para cada vista-->
<?= $this->section("css") ?>
<?= $this->endSection() ?>

<!--contenido especifico para cada vista-->
<?= $this->section("contenido") ?>
FORM DE PAGO
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-4">
      <div class="login-wrap p-4 p-md-8">
        <img src="../img/cineee.png" alt="logo" style="width:400px;">
      </div>
    </div>
    <div class="col-md-8">
      <!-- jquery validation -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Pago de boletos</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
        <form id="form-usuario" action="../backend/crud/boletos/insertBoleto.php" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <br>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Peliculas disponibles</label>
                  <select class="form-control" name="pelicula">
                    <option value="">Selecciona una pelicula</option>
                    <?php
                    $html = '';
                    if (isset($peliculas) && sizeof($peliculas) > 0) {
                      foreach ($peliculas as $peliculas) {
                        $selected = ($peliculas['idPelicula'] == $idPelicula) ? 'selected' : '';
                        $html .= '
                                  <option value=' . $peliculas['idPelicula'] . ' ' . $selected . '> ' . $peliculas['nombrePelicula'] . ' </option>
                                ';
                      }
                    }
                    echo $html;
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Número de asientos</label>
                  <input type="number" name="numAsientos" class="form-control" id="numAsientos" placeholder="Asientos">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha</label>
                  <input type="date" name="fechaBoleto" class="form-control" id="fechaBoleto" placeholder="fecha">
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <br>
                <label for="exampleInputEmail1">Horario</label>
                <select class="form-control" name="horario">
                  <option value="">Selecciona un horario disponible</option>
                  <?php
                  $html = '';
                  if (isset($horarios) && sizeof($horarios) > 0) {
                    foreach ($horarios as $horarios) {
                      $html .= '
                                  <option> ' . $horarios['horaProyeccion'] . ' </option>
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
        <button type="submit" class="btn btn-primary">Comprar</button>
        <a href="./boletos.php" class="btn btn-danger">Cancelar</a>
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
</div>
<!-- /.container-fluid -->
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>