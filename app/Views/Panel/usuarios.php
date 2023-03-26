<!--PROCESO DE HERENCIA-->

<!--heredar todo el contenido especifico de la plantilla base-->
<?= $this->extend("base/panel_base") ?>

<!--css especificos para cada vista-->
<?= $this->section("css") ?>
<!-- SWEETALERT2 -->
<link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css " rel="stylesheet">
<?= $this->endSection() ?>

<!--contenido especifico para cada vista-->
<?= $this->section("contenido") ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <a href="<?= route_to('usuario_nuevo') ?>" class="btn btn-secondary btn-sm">Agregar nuevo</a><br><br>
      <div class="card">
        <div class="card-header">
          <center>
            <h3 class="card-title">Lista de Usuarios</h3>
          </center>
        </div>
        <div class="card-body">
          <table id="table-usuarios" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Foto de perfil</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (!empty($usuarios)) {
                $html = '';
                $numero = 0;
                foreach ($usuarios as $usuario) {
                  $foto_perfil = (!is_null($usuario->imagenUsuario)) ? base_url(RECURSOS_PANEL_IMG_USUARIOS . "/" . $usuario->imagenUsuario) : (
                    ($usuario->sexoUsuario == SEXO_MASCULINO['clave']) ? base_url(RECURSOS_PANEL_IMG_USUARIOS . "male.webp")
                    : base_url(RECURSOS_PANEL_IMG_USUARIOS . "female.png"));
                  $html .= '
                      <tr>
                          <td>' . ++$numero . '</td>
                          <td><img class="" width="50px" src="' . $foto_perfil . '"></td>
                          <td>' . $usuario->nombre . ' ' . $usuario->aP . ' ' . $usuario->aM . '</td>
                          <td>' . $usuario->rol . '</td>
                          <td>';
                  if ($usuario->estatus_usuario == ESTATUS_DESHABILITADO) {
                    $html .= '<button href="" class="btn btn-success estatus" id="' . $usuario->idUsuario . '_' . ESTATUS_HABILITADO . '"><i class="fas fa-universal-access"></i> Habilitar</button>';
                  } //end if 
                  else {
                    $html .= '<button href="" class="btn btn-dark estatus" id="' . $usuario->idUsuario . '_' . ESTATUS_DESHABILITADO . '"><i class="fas fa-low-vision"></i> Deshabilitar</button>';
                  } //end else
                  $html .= '
                              <a href="' . route_to("usuario_detalles", $usuario->idUsuario) . '" class="btn btn-warning text-white"><i class="fas fa-info-circle"></i> Detalles</a>
                              <button class="btn btn-danger eliminar" id="'.$usuario->idUsuario.'"><i class="fas fa-times-circle"></i> Eliminar</button>
                          </td>
                      </tr>
                      ';
                } //end foreach usuarios
                echo $html;
              } //end if empty
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
<script>
  //colocar la ruta definida 
  /** 
   * https://localhost:8080/
   */
  let path = '<?= base_url(""); ?>';
</script>
<!-- SWEETALERT2 -->
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js "></script>
<script src="<?= base_url(RECURSOS_PANEL_JS . 'globales/funcionesGlobales.js') ?>"></script>
<?= $this->endSection("") ?>