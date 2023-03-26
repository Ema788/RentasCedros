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
            <h3 class="card-title">Formulario de pelicula detalles</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!-- <form id="form-usuario" action="../backend/crud/peliculasFamiliares/updatePeliculaFamiliar.php" method="post" enctype="multipart/form-data"> -->
          <?php
            $attributes = array('id' => 'form_familiaresDetalles');
            echo form_open('familiaresDetalles', $attributes);
          ?>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre de la película</label>
                      <?php
                        $data = array(
                        'type'  => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Nombre de las peliculas',
                        'id'    => 'name',
                        'name'  => 'name',
                        'required' => 'true'
                        );
                        echo form_input($data);
                      ?>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripción</label>
                      <?php
                        $data = array(
                        'type'  => 'textarea',
                        'class' => 'form-control',
                        'placeholder' => 'Descripcion',
                        'id'    => 'descripcion',
                        'name'  => 'descripcion',
                        'required' => 'true'
                        );
                        echo form_input($data);
                      ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Duración</label>
                      <?php
                        $data = array(
                        'type'  => 'number',
                        'class' => 'form-control',
                        'placeholder' => 'Duracion',
                        'id'    => 'duracion',
                        'name'  => 'duracion',
                        'required' => 'true'
                        );
                        echo form_input($data);
                      ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Director</label>
                      <?php
                        $data = array(
                        'type'  => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Director',
                        'id'    => 'director',
                        'name'  => 'director',
                        'required' => 'true'
                        );
                        echo form_input($data);
                      ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Estatus</label>
                      <select class="form-control" name="estatus">
                        <option value="">Seleccionar un estado</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Año de estreno</label>
                      <?php
                        $data = array(
                        'type'  => 'text',
                        'class' => 'form-control',
                        'placeholder' => 'Año de estreno',
                        'id'    => 'año_estreno',
                        'name'  => 'año_estreno',
                        'required' => 'true'
                        );
                        echo form_input($data);
                      ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label for="exampleInputEmail1">Foto de portada</label>
                    <input type="file" name="foto_perfil" onchange="previsualizar_imagen('previsualizar_imagen','foto-input')" class="form-control" id="foto-input">
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-primary">Editar</button> -->
                <?= form_submit('Editar', 'Editar', ['class' => 'form-control btn btn-primary rounded submit px-3'])?>
                <a href="<?= route_to('dashboard')?>" class="btn btn-danger">Cancelar</a>
              </div>
        <!--  </form> -->
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