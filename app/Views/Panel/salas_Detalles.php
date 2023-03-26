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
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h3 class="card-title">Consulta disponibilidad de asientos</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <table id="table-usuarios" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tipo de sala</th>
                                    <th># asientos</th>
                                    <th># asientos ocupados</th>
                                    <th># asientos vacios</th>
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
                                                    <td>' . $usuario["tipoSala"] . '</td>
                                                    <td>' . $usuario["numAsientos"] . '</td>
                                                    <td>' . $usuario["asientosOcupados"] . '</td>
                                                    <td>' . $usuario["asientosLibres"] . '</td>
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