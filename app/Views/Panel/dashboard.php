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
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                    <div class="col">
                        <div class="card h-200">
                            <img class="card-img-top" src="<?php echo base_url(RECURSOS_PORTAL_IMG . '1.jpg') ?>" alt="AdminLTELogo" height="220" width="80"><br>
                            <img class="card-img-top" src="<?php echo base_url(RECURSOS_PORTAL_IMG . '2.webp') ?>" alt="AdminLTELogo" height="220" width="80">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-200">
                            <img class="card-img-top" src="<?php echo base_url(RECURSOS_PORTAL_IMG . '3.jpeg') ?>" alt="AdminLTELogo" height="520" width="60">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-200">
                            <img class="card-img-top" src="<?php echo base_url(RECURSOS_PORTAL_IMG . '5.jpg') ?>" alt="AdminLTELogo" height="220" width="80"><br>
                            <img class="card-img-top" src="<?php echo base_url(RECURSOS_PORTAL_IMG . '6.jpg') ?>" alt="AdminLTELogo" height="220" width="80"><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>