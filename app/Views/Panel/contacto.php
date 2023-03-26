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
                        <h3 class="card-title">Lista de comentarios</h3>
                    </center>
                </div>
                <div class="card-body">
                    <table id="table-usuarios" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Fecha</th>
                                <th>Servicio</th>
                                <th>Tipo de mensaje</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

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