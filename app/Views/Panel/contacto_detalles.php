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
                        <h3 class="card-title">Detalles del comentario</h3>
                    </center>
                </div>
                <div class="card-body">

                    <table id="table-usuarios" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Fecha</th>
                                <th>Correo</th>
                                <th>Servicio</th>
                                <th>Tipo de mensaje</th>
                                <th>Mensaje</th>
                                <th>Sucursal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Declaramos la variable para iterar a los usuarios
                            $html = '';
                            //print("<pre>".print_r($usuario, true)."</pre>");

                            //Verificamos que la variable ya este creada y que el tamaño debe de ser mayor a 0 - los registrps
                            if (isset($usuario) && sizeof($usuario) > 0) {
                                $html .= '
                                                <tr>
                                                    <td>' . $usuario["nombre"] . ' ' . $usuario["ApellidoPaterno"] . ' ' . $usuario["apellidoMaterno"] . '</td>
                                                    <td>' . $usuario["fecha"] . '</td>
                                                    <td>' . $usuario["correo"] . '</td>
                                                    <td>' . $usuario["servicio"] . '</td>
                                                    <td>' . $usuario["tipomensaje"] . '</td>
                                                    <td>' . $usuario["mensaje"] . '</td>
                                                    <td>' . $usuario["nombreSucursal"] . '</td>
                                                </tr>
                                            ';
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