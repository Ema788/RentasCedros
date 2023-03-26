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
      <div class="card">
        <div class="card-header">
          <center>
            <h3 class="card-title">Lista de las salas de cada sucursal</h3>
          </center>
        </div>
        <div class="card-body">
          <table id="table-usuarios" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Sucursal</th>
                <th>Número de salas</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //Declaramos la variable para iterar a los usuarios
              $html = '';
              // print("<pre>".print_r($usuarios, true)."</pre>");

              //Verificamos que la variable ya este creada y que el tamaño debe de ser mayor a 0 - los registrps
              if (isset($salas) && sizeof($salas) > 0) {
                //contador
                $num = 0;
                //foreach rompe el arreglo de usuarios que va mostrando la informacion
                foreach ($salas as $salas) {
                  $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $salas["nombreSucursal"] . '</td>
                                                    <td>' . $salas["cantidad"] . '</td>
                                                    <td>';
                  $html .= ' <a href="./salas_Detalles.php?idSucursal=' . $salas["idSucursal"] . '" class="btn btn-warning btn-sm">Ver salas</a>
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