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
    <div class="col-12">
      <a href="<?= route_to('sucursal_nueva') ?>" class="btn btn-secondary btn-sm">Agregar nueva</a><br><br>
      <div class="card">
        <div class="card-header">
          <center>
            <h3 class="card-title">Lista de sucursales de cine</h3>
          </center>
        </div>
        <div class="card-body">
          <table id="table-usuarios" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
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
                                                    <td>' . $usuario["nombreSucursal"] . '</td>
                                                    <td>';
                  $html .= '  <a href="../backend/crud/sucursales/deleteSucursal.php?idSucursal=' . $usuario["idSucursal"] . '" class="btn btn-danger btn-sm">Eliminar</a> 
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
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>