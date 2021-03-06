<nav class="navbar sticky-top navbar-expand-lg navbar-light animated fadeIn">
  <a class="navbar-brand Logo" href="index.php"><i class="fa fa-music fa-lg" aria-hidden="true" style="color:#1E88E5;"></i>PlayMusic</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse"  id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="perfil.php">Mi perfil</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="registro.php">Crear Una Cuenta</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 pull-right">
      <ul class="navbar-nav flex-row mr-lg-0">
        <li class="nav-item">
          <a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></a>
        </li>
      </ul>
    </form>
  </div>
</nav>

<!-- Modal Login-->
<div class="modal fade Modal-Login" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mx-auto" id="exampleModalLabel">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mx-auto text-center">
          <img class="rounded-circle mx-auto" src="build/img/user.png" alt="Foto de Usuario">
        </div>
        <form name="frmInicioSesion" action="valida.php" method="POST" onSubmit="return InicioSesion()">
          <div class="form-group">
            <label for="user_ui">Usuario</label>
            <input type="text" class="form-control"  id="user_ui" name="user_ui" placeholder="Escribe tu Usuario">
          </div>
          <div class="form-group">
            <label for="password_ui">Contraseña</label>
            <input type="password" class="form-control" id="password_ui" name="password_ui" placeholder="Escribe tu Contraseña">
          </div>

          <a href="registro.php">Crear una nueva Cuenta</a>

          <div class="pull-right buttons-modal" >
            <button type="submit" name="submit" class="btn btn-outline-warning">Aceptar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
