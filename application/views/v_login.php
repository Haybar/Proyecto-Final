<?php include("header.php"); ?>


<div class="container">
  <div class="row">
    <div class="col-4">.col-4</div>
    <div class="col-4">
    <div class="login-box">
        <form class="login-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
          <div class="form-group">
            <label class="control-label">CORREO</label>
            <input class="form-control" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input class="form-control" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Registrate ahora</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Registro</h3>
          <div class="form-group">
            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label class="control-label">Primer Apellido</label>
            <input class="form-control" type="text" placeholder="Ingrese su Primer Apellido">
          </div>
          <div class="form-group">
            <label class="control-label">Segundo Apellido</label>
            <input class="form-control" type="text" placeholder="Ingrese su Segundo Apellido">
          </div>
          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="email" placeholder="Ingrese su email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="tile-footer" align="center">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
            </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
    </div>
    <div class="col-4">.col-4</div>
  </div>
  </div>


<?php include("footer.php"); ?>