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
      <div class="col-12">
        <a href="<?= route_to('proyeccion_nueva') ?>" class="btn btn-secondary btn-sm">Agregar nueva</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de proyecciones</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="table-usuarios" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Película</th>
                  <th>Horario</th>
                  <th>Tipo de sala</th>
                  <th>Sucursal</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                //Declaramos la variable para iterar a los usuarios
                $html = '';
                // print("<pre>".print_r($usuarios, true)."</pre>");

                //Verificamos que la variable ya este creada y que el tamaño debe de ser mayor a 0 - los registrps
                if (isset($usuarios) && sizeof($usuarios) > 0) {
                  //contador
                  $num = 0;
                  //foreach rompe el arreglo de usuarios que va mostrando la informacion
                  foreach ($usuarios as $usuario) {
                    $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $usuario["nombrePelicula"] . '</td>
                                                    <td>' . $usuario["horaProyeccion"] . '</td>
                                                    <td>' . $usuario["idSala"] . ' ' . $usuario["tipoSala"] . '</td>
                                                    <td>' . $usuario["nombreSucursal"] . '</td>
                                                    <td>';
                    if ($usuario["estatus_proyeccion"] != 1) {
                      $html .= '   <a href="../backend/crud/proyecciones/updateEstatus.php?idProyeccion=' . $usuario["idProyeccion"] . '&estatus=2" class="btn btn-info btn-sm">Habilitar</a>';
                    } //end if
                    else {
                      $html .= '   <a href="../backend/crud/proyecciones/updateEstatus.php?idProyeccion=' . $usuario["idProyeccion"] . '&estatus=1" class="btn btn-primary btn-sm">Deshabilitar</a>';
                    } //end else
                  } //end foreach
                } //end if 
                echo $html;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>