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
        <a href="<?= route_to('proyeccion_nueva') ?>" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
        <div class="card">
          <div class="card-header">
            <center>
              <h3 class="card-title">Lista de pagos pendientes y pagados</h3>
            </center>
          </div>
          <div class="card-body">
            <table id="table-usuarios" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Inquilino</th>
                  <th>Otorgado por:</th>
                  <th>Total</th>
                  <th>Estatus</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php
                //Declaramos la variable para iterar a los usuarios
                $html = '';
                // print("<pre>".print_r($usuarios, true)."</pre>");

                //Verificamos que la variable ya este creada y que el tamaño debe de ser mayor a 0 - los registrps
                if (isset($boletos) && sizeof($boletos) > 0) {
                  //contador
                  $num = 0;
                  //foreach rompe el arreglo de usuarios que va mostrando la informacion
                  foreach ($boletos as $boletos) {
                    $html .= '
                                                <tr>
                                                    <td>' . ++$num . '</td>
                                                    <td>' . $boletos->nombre_inquilino . ' ' . $boletos->apellido_paterno_inquilino . ' ' . $boletos->apellido_materno_inquilino . '</td>
                                                    <td>' . $boletos->nombre_administrador . ' ' . $boletos->apellido_paterno_administrador . ' ' . $boletos->apellido_materno_administrador . '</td>
                                                    <td>' . $boletos->total_pago_alquiler . '</td>
                                                    <td>';
                                    if ($boletos->estatus_alquiler == 0) {
                                        $html .= 'Pendiente';
                                    } //end if 
                                    else {
                                        $html .= 'Pagado';
                                    } //end else
                                    $html .= '
                                    </td>
                                    <td>';
                  if ($boletos->estatus_alquiler == ESTATUS_DESHABILITADO) {
                    $html .= '<button href="" class="btn btn-success estatus" id="' . $boletos->idAlquiler   . '_' . ESTATUS_HABILITADO . '"><i class="fas fa-universal-access"></i> Pagado</button>';
                  } //end if 
                  else {
                    $html .= '<button href="" class="btn btn-dark estatus" id="' . $boletos->idAlquiler   . '_' . ESTATUS_DESHABILITADO . '"><i class="fas fa-low-vision"></i> Sin pagar</button>';
                  } //end else
                  $html .= '
                              <a href="' . route_to("usuario_detalles", $boletos->idAlquiler  ) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
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