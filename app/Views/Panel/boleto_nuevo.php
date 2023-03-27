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
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulario para añadir un departamento</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
                <!-- <form id="form-usuario" action="../backend/crud/boletos/insertBoleto.php" method="post" enctype="multipart/form-data"> -->
                <?php
                  $attributes = array('id' => 'form_boletoNuevo');
                  echo form_open('registrarDepartamento', $attributes);
                ?>  
                <div class="card-body">
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Numero de departamento</label>
                          <?php
                                        $data = array(
                                        'type'  => 'text',
                                        'name'  => 'numero_departamento',
                                        'class' => 'form-control',
                                        'id'    => 'numero_departamento',
                                        'placeholder' => '1-A',
                                        'required' => 'true'
                                    );
                                    echo form_input($data);
                                    ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Número de asientos</label>
                          <!-- <input type="number" name="numAsientos" class="form-control" id="numAsientos" placeholder="Numero de asientos"> -->
                          <?php
                                $data = array(
                                    'type'  => 'number',
                                    'class' => 'form-control',
                                    'placeholder' => '#',
                                    'id'    => 'numero_muebles_departamento',
                                    'name'  => 'numero_muebles_departamento',
                                    'required' => 'true'
                                );
                                echo form_input($data);
                          ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Descripcion</label>
                          <!-- <input type="date" name="fechaBoleto" class="form-control" id="fecha" placeholder="fechaBoleto"> -->
                          <?php
                                $data = array(
                                    'type'  => 'text',
                                    'class' => 'form-control',
                                    'placeholder' => 'Descripcion del departamento',
                                    'id'    => 'descripcion_departamento',
                                    'name'  => 'descripcion_departamento',
                                    'required' => 'true'
                                );
                                echo form_input($data);
                          ?>
                        </div>
                      </div>
                    </div>

                  </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
                <?= form_submit('Registrar', 'Registrar', ['class' => ' btn btn-primary rounded submit px-3'])?>
                <a href="<?= route_to('boletos')?>" class="btn btn-danger">Cancelar</a>
              </div>
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
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>