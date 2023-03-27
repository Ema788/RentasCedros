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
            <h3 class="card-title">Lista de los administradores</h3>
          </center>
        </div>
        <div class="card-body">
          <table id="table-usuarios" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th></th>
                <th>Administrador</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //Declaramos la variable para iterar a los usuarios
              $html = '';
              // print("<pre>".print_r($usuarios, true)."</pre>");

              //Verificamos que la variable ya este creada y que el tamaño debe de ser mayor a 0 - los registrps
              if (isset($usuarios) && sizeof($usuarios) > 0) {
                //contador
                $num = 0;
                //foreach rompe el arreglo de usuarios que va mostrando la informacion
                foreach ($usuarios as $usuario) {
                  $foto_perfil = (
                    ($usuario->sexo_administrador == SEXO_MASCULINO['clave']) ? base_url(RECURSOS_PANEL_IMG_USUARIOS . "male.webp")
                    : base_url(RECURSOS_PANEL_IMG_USUARIOS . "female.png"));
                  $html .= '
                      <tr>
                          <td>' . ++$num . '</td>
                          <td><img class="" width="50px" src="' . $foto_perfil . '"></td>
                                                    <td>' . $usuario->nombre_administrador . ' ' . $usuario->apellido_paterno_administrador . ' ' . $usuario->apellido_materno_administrador . '</td>
                                                    <td>' . $usuario->email_administrador . '</td>
                                                    <td>' . $usuario->nombre_rol . '</td>
                                                    <td>';
                  if ($usuario->estatus_administrador == ESTATUS_DESHABILITADO) {
                    $html .= '<button href="" class="btn btn-success estatus" id="' . $usuario->idAdministrador   . '_' . ESTATUS_HABILITADO . '"><i class="fas fa-universal-access"></i> Habilitar</button>';
                  } //end if 
                  else {
                    $html .= '<button href="" class="btn btn-dark estatus" id="' . $usuario->idAdministrador   . '_' . ESTATUS_DESHABILITADO . '"><i class="fas fa-low-vision"></i> Deshabilitar</button>';
                  } //end else
                  $html .= '
                              <a href="' . route_to("usuario_detalles", $usuario->idAdministrador  ) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                              <button class="btn btn-danger eliminar" id="'.$usuario->idAdministrador  .'"><i class="fas fa-times-circle"></i> Eliminar</button>
                          </td>
                                                </tr>
                                              ';
                } //end foreach
              } //end if 
              echo $html;
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