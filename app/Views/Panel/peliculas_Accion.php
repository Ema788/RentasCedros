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
        <a href="<?= route_to('peliculaFamiliarNueva') ?>" class="btn btn-secondary btn-sm">Agregar nueva</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de películas de acción</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="table-usuarios" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Duración</th>
                  <th>Imagen</th>
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
                                                    <td>' . $usuario["duracion"] . ' minutos</td>
                                                    <td>' . $usuario["imagenPelicula"] . '</td>
                                                    <td>';
                    if ($usuario["estatus_pelicula"] != 1) {
                      $html .= '   <a href="../backend/crud/peliculasFamiliares/updateEstatus.php?idPelicula=' . $usuario["idPelicula"] . '&estatus=2" class="btn btn-info btn-sm">Habilitar</a>';
                    } //end if
                    else {
                      $html .= '   <a href="../backend/crud/peliculasFamiliares/updateEstatus.php?idPelicula=' . $usuario["idPelicula"] . '&estatus=1" class="btn btn-primary btn-sm">Deshabilitar</a>';
                    } //end else

                    $html .= '  <a href="../backend/crud/peliculasFamiliares/deletePeliculaFamiliar.php?idPelicula=' . $usuario["idPelicula"] . '" class="btn btn-danger btn-sm">Eliminar</a> 
                                                        <a href="./peliculas_Familiares_detalles.php?idPelicula=' . $usuario["idPelicula"] . '" class="btn btn-warning btn-sm">Detalles</a>
                                                    </td>
                                                </tr>
                                              ';
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