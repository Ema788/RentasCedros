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
          <h3 class="card-title">Formulario de película nueva</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <!--el id es para referenciar las validaciones
                        action es para el redireccionamiento del proceso del BACKEND
                        el metodo post es para enviar datos de manera segura
                        enctype envia y procesa informacion mediante los archivos por medio del metodo $_FILES-->
        <!--  <form id="form-usuario" action="../backend/crud/peliculasFamiliares/insertPeliculaFamiliar.php" method="post" enctype="multipart/form-data"> -->
        <?php
            $attributes = array('id' => 'form_familiaresNuevo');
            echo form_open('familiaresNuevo', $attributes);
          ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <center>
                  <img src="../img/no-disponible.jpg" class="img-rounded" alt="" id="img-preview" width="20%">
                </center>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de la película</label>
                  <!-- <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"> -->
                  <?php
                    $data = array(
                    'type'  => 'text',
                    'class' => 'form-control',
                    'placeholder' => 'Nombre de la pelicual',
                    'id'    => 'name',
                    'name'  => 'name',
                    'required' => 'true'
                    );
                  echo form_input($data);
                ?>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripción</label>
                  <!--  <textarea type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción de la pelicula" rows="3"></textarea> -->
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
            </div>

            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">Director</label>
                  <!-- <input type="text" name="director" class="form-control" id="director" placeholder="Director de la pelicula"> -->
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
                  <label for="exampleInputEmail1">Año de estreno</label>
                  <!--  <input type="text" name="anioEstreno" class="form-control" id="anioEstreno" placeholder="Año de estreno"> -->
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
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Duración</label>
                <!--   <input type="number" name="duracion" id="duracion" class="form-control" placeholder="Minutos"> -->
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

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Género</label>
                  <?php
                  $parametrosR = array(
                    'class' => 'form-control',
                    'id' => 'genero'
                    );
                    echo form_dropdown("gen", ["" => "Selecciona un Genero"] + GENEROS, array(), $parametrosR);
                    ?>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Estatus</label>
                  <select class="form-control" name="estatus">
                    <option value="">Seleccionar un estado</option>
                    <option value="2">Inactivo</option>
                    <option value="1">Activo</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <label for="exampleInputEmail1">Foto perfil</label>
                <input type="file" name="foto_perfil" onchange="previsualizar_imagen('previsualizar_imagen','foto-input')" class="form-control" id="foto-input">
              </div>
            </div>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- <button type="submit" class="btn btn-primary">Registrar</button> -->
            <?= form_submit('Registrar', 'Registrar', ['class' => 'form-control btn btn-primary rounded submit px-3'])?>
            <a href="<?= route_to('dashboard')?>" class="btn btn-danger">Cancelar</a>
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
<?= $this->endSection("") ?>
<!--js especificos para cada vista-->
<?= $this->section("js") ?>
<?= $this->endSection("") ?>