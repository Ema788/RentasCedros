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
                        <h3 class="card-title">Lista de boletos vendidos</h3>
                    </center>
                </div>
                <div class="card-body">
                    <table id="table-usuarios" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Num asientos</th>
                                <th>Fecha</th>
                                <th>Precio</th>
                                <th>Pelicula</th>
                                <th>Hora</th>
                                <th>Sala</th>
                                <th>Sucursal</th>
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
                                        <td>' . $boletoRegistrado->nombre . ' ' . $boletoRegistrado->aP . ' ' . $boletoRegistrado->aM . '</td>
                                        <td>' . $boletoRegistrado->asiento . '</td>
                                        <td>' . $boletoRegistrado->fecha . '</td>
                                        <td>'.$boletoRegistrado->precio.'</td>
                                        <td>'.$boletoRegistrado->nombrePelicula.'</td>
                                        <td>' . $boletoRegistrado->horaEmpieza . ' - ' . $boletoRegistrado->horaFinaliza . '</td>
                                        <td>'.$boletoRegistrado->tipoSala.'</td>
                                        <td>'.$boletoRegistrado->nombreSucursal.'</td>
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