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
            <a href="<?= route_to('boleto_nuevo') ?>" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
            <div class="card">
                <div class="card-header">
                    <center>
                        <h3 class="card-title">Lista de departamentos</h3>
                    </center>
                </div>
                <div class="card-body">
                    <table id="table-usuarios" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Numero de departamento</th>
                                <th>Numero de muebles</th>
                                <th>Descripcion</th>
                                <th>Estatus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($boletos)) {
                                $html = '';
                                $numero = 0;
                                foreach ($boletos as $boletoRegistrado) {
                                    $html .= '
                                    <tr>
                                        <td>' . ++$numero . '</td>
                                        <td>' . $boletoRegistrado->numero_departamento . '</td>
                                        <td>' . $boletoRegistrado->numero_muebles_departamento . '</td>
                                        <td>' . $boletoRegistrado->descripcion_departamento . '</td>
                                        <td>';
                                    if ($boletoRegistrado->estatus_departamento == 0) {
                                        $html .= 'Ocupado';
                                    } //end if 
                                    else {
                                        $html .= 'Disponible';
                                    } //end else
                                    $html .= '
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