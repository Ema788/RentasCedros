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
            <h3 class="card-title">Formulario de nuevo pago</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
          <!-- <form id="form-usuario" action="../backend/crud/proyecciones/insertProyeccion.php" method="post" enctype="multipart/form-data"> -->
          <?php
          $attributes = array('id' => 'form_proyeccionNueva');
          echo form_open('registrarAlquiler', $attributes);
          ?>
          <div class="card-body">
            <br>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Inquilino</label>
                  <?php
                  $data = array(
                    'type'  => 'text',
                    'name'  => 'inquilino ',
                    'class' => 'form-control',
                    'id'    => 'inquilino ',
                    'placeholder' => 'Nombre del inquilino',
                    'required' => 'true'
                  );
                  echo form_input($data);
                  ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Administrador</label>
                  <?php
                  $data = array(
                    'type'  => 'text',
                    'name'  => 'administrador ',
                    'class' => 'form-control',
                    'id'    => 'administrador ',
                    'placeholder' => 'Nombre del administrador',
                    'required' => 'true'
                  );
                  echo form_input($data);
                  ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Total a pagar</label>
                  <?php
                  $data = array(
                    'type'  => 'number',
                    'name'  => 'total_pago_alquiler',
                    'class' => 'form-control',
                    'id'    => 'total_pago_alquiler',
                    'placeholder' => '3000.00',
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
            <?= form_submit('Guardar', 'Guardar', ['class' => ' btn btn-primary rounded submit px-3']) ?>
            <a href="<?= route_to('proyeccion') ?>" class="btn btn-danger">Cancelar</a>
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
</section>
<?= $this->endSection("") ?>

<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>