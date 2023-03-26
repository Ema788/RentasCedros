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
                        <h3 class="card-title">Formulario de usuario nuevo</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
                    <!--<form id="form-usuario" action="../backend/crud/administrador/insertarUsuario.php" method="post" enctype="multipart/form-data">-->
                    <?php
                    $attributes = array('id' => 'form_usuarioNuevo');
                    echo form_open_multipart('registrarUsuario', $attributes);
                    ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <img src="<?= base_url(RECURSOS_PANEL_IMG . 'noUserImage.jpeg'); ?>" class="img-rounded" alt="" id="img-preview" width="20%">
                                </center>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre(s)</label>
                                    <!--<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre(s)">-->
                                    <?php
                                    $data = array(
                                        'type'  => 'text',
                                        'name'  => 'name',
                                        'class' => 'form-control',
                                        'id'    => 'name',
                                        'placeholder' => 'Nombre(s)',
                                        'required' => 'true'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellido Paterno</label>
                                    <!--<input type="text" name="apellidoPaterno" class="form-control" id="apellidoPaterno" placeholder="Apellido Paterno">-->
                                    <?php
                                    $data = array(
                                        'type'  => 'text',
                                        'name'  => 'apellidoPaterno',
                                        'class' => 'form-control',
                                        'id'    => 'apellidoPaterno',
                                        'placeholder' => 'Apellido Paterno',
                                        'required' => 'true'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellido Materno</label>
                                    <!--<input type="text" name="apellidoMaterno" class="form-control" id="apellidoMaterno" placeholder="Apellido Paterno">-->
                                    <?php
                                    $data = array(
                                        'type'  => 'text',
                                        'name'  => 'apellidoMaterno',
                                        'class' => 'form-control',
                                        'id'    => 'apellidoMaterno',
                                        'placeholder' => 'ApellidoPaterno',
                                        'required' => 'true'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rol</label>
                                    <?php
                                    $parametrosR = array(
                                        'class' => 'form-control',
                                        'id' => 'rol'
                                    );
                                    echo form_dropdown("rol", ["" => "Selecciona un rol"] + ROLES, array(), $parametrosR);
                                    ?>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo electrónico</label>
                                    <!--<input type="email" name="correo" class="form-control" id="correo" placeholder="Correo electrónico">-->
                                    <?php
                                    $data = array(
                                        'type'  => 'email',
                                        'name'  => 'email',
                                        'class' => 'form-control',
                                        'id'    => 'email',
                                        'placeholder' => 'Correo Electronico(ejemplo@gmail.com)',
                                        'required' => 'true'
                                    );
                                    echo form_input($data);
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sexo</label>
                                    <?php
                                    $parametros = array(
                                        'class' => 'form-control',
                                        'id' => 'sexo'
                                    );
                                    echo form_dropdown("sexo", ["" => "Selecciona un sexo"] + SEXO, array(), $parametros);
                                    ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contraseña</label>
                                    <!--<input type="password" name="password" class="form-control" id="password" placeholder="***********">-->
                                    <?php
                                    $data = array(
                                        'type'  => 'password',
                                        'name'  => 'password',
                                        'class' => 'form-control',
                                        'id'    => 'password',
                                        'placeholder' => '********',
                                        'required' => 'true'
                                    );
                                    echo form_password($data);
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Repetir Contraseña</label>
                                    <!--<input type="password" name="repassword" class="form-control" id="repassword" placeholder="***********">-->
                                    <?php
                                    $data = array(
                                        'type'  => 'password',
                                        'name'  => 'repassword',
                                        'class' => 'form-control',
                                        'id'    => 'repassword',
                                        'placeholder' => '********',
                                        'required' => 'true'
                                    );
                                    echo form_password($data);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleInputEmail1">Foto de perfil</label>
                                <?php
                                $data = array(
                                    'type' => 'file',
                                    'name' => 'foto_perfil',
                                    'class' => 'form-control',
                                    'id' => 'foto_perfil',
                                    'placeholder' => '',
                                );
                                echo form_input($data);
                                ?>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <!--<button type="submit" class="btn btn-primary">Registrar</button>-->
                        <?= form_submit('Registrar', 'Registrar', ['class' => 'btn btn-primary']) ?>
                        <a href="<?= route_to('usuarios') ?>" class="btn btn-danger">Cancelar</a>
                    </div>
                    <!-- </form> -->
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
    <?php echo form_close(); ?>
</section>
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<script src="<?= base_url(RECURSOS_PANEL_JS.'globales/funcionesGlobales.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_JS.'especificos/usuario_nuevo.js') ?>"></script>
<?= $this->endSection("") ?>