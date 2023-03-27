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
                        <h3 class="card-title">Lista de quejas hechas por los inquilinos</h3>
                    </center>
                </div>
                <div class="card-body">
                    <table id="table-usuarios" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Inquilino</th>
                                <th>Fecha</th>
                                <th>Descrpcion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $html = '';
                            if (isset($usuarios) && sizeof($usuarios) > 0) {
                                
                                $numero = 0;
                                foreach ($usuarios as $usuario) {
                                    $html .= '
                      <tr>
                          <td>' . ++$numero . '</td>
                          <td>' . $usuario->nombre_inquilino . ' ' . $usuario->apellido_paterno_inquilino . ' ' . $usuario->apellido_materno_inquilino . '</td>
                          <td>' . $usuario->fecha_registro_queja . '</td>
                          <td>' . $usuario->descripcion_queja . '</td>
                          <td>';
                                    if ($usuario->estatus_queja == ESTATUS_DESHABILITADO) {
                                        $html .= '<button href="" class="btn btn-success estatus" id="' . $usuario->idQueja  . '_' . ESTATUS_HABILITADO . '"><i class="fas fa-universal-access"></i> Resuelta</button>';
                                    } //end if 
                                    else {
                                        $html .= '<button href="" class="btn btn-dark estatus" id="' . $usuario->idQueja  . '_' . ESTATUS_DESHABILITADO . '"><i class="fas fa-low-vision"></i> Sin resolver</button>';
                                    } //end else
                                    $html .= '
                              <a href="' . route_to("usuario_detalles", $usuario->idQueja) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                              <button class="btn btn-danger eliminar" id="' . $usuario->idQueja . '"><i class="fas fa-times-circle"></i> Eliminar</button>
                          </td>
                      </tr>
                      ';
                                } //end foreach usuarios
                                echo $html;
                            } //end if empty
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