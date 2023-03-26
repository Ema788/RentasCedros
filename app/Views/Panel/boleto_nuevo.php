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
                  <h3 class="card-title">Formulario de usuario Boleto</h3>
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
                  echo form_open('boletoNuevo', $attributes);
                ?>  
                <div class="card-body">
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Peliculas disponibles</label>
                          <?php
                                        $data = array(
                                        'type'  => 'email',
                                        'name'  => 'email',
                                        'class' => 'form-control',
                                        'id'    => 'email',
                                        'placeholder' => 'Peliculas disponibles',
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
                                    'placeholder' => 'Numero de Asientos',
                                    'id'    => 'numAsientos',
                                    'name'  => 'numAsientos',
                                    'required' => 'true'
                                );
                                echo form_input($data);
                          ?>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Fecha</label>
                          <!-- <input type="date" name="fechaBoleto" class="form-control" id="fecha" placeholder="fechaBoleto"> -->
                          <?php
                                $data = array(
                                    'type'  => 'date',
                                    'class' => 'form-control',
                                    'placeholder' => 'Numero de Asientos',
                                    'id'    => 'fecha',
                                    'name'  => 'fecha',
                                    'required' => 'true'
                                );
                                echo form_input($data);
                          ?>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Horario</label>
                        <?php
                                        $data = array(
                                        'type'  => 'email',
                                        'name'  => 'email',
                                        'class' => 'form-control',
                                        'id'    => 'email',
                                        'placeholder' => 'Horario',
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
                <?= form_submit('Registrarse', 'Registrarse', ['class' => 'form-control btn btn-primary rounded submit px-3'])?>
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