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
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Formulario de sucursal nueva</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
                    <!-- <form id="form-usuario" action="../backend/crud/sucursales/insertarSucursal.php" method="post" enctype="multipart/form-data"> -->
                    <?php
                    $attributes = array('id' => 'form_sucursalNueva');
                    echo form_open('sucursalNueva', $attributes);
                    ?>
                    <div class="card-body">
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre de la sucursal</label>
                                    <!-- <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"> -->
                                    <?php
                                    $data = array(
                                        'type'  => 'text',
                                        'name'  => 'name',
                                        'class' => 'form-control',
                                        ' id'    => 'name',
                                        'placeholder' => 'Nombre(s)',
                                        'required' => 'true'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
                        <?= form_submit('Registrarse', 'Registrarse', ['class' => 'form-control btn btn-primary rounded submit px-3']) ?>
                        <a href="<?= route_to('sucursales') ?>" class="btn btn-danger">Cancelar</a>
                    </div>
                    <!-- /form> -->
                    <?php echo form_close(); ?>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>