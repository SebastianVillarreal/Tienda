<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My App | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../d_plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../d_plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../d_plantilla/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="../d_plantilla/plugins/toastr/toastr.min.css">
  <!--Icono del Sistema -->
  <link rel="shortcut icon" href="../d_plantilla/dist/img/logo3.png" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <img src="../d_plantilla/dist/img/logo3.png" alt="logo" >
    <b>My</b> App
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa las credenciales</p>

      <form id="form_datos" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" id="entrar" class="btn btn-primary btn-block">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../d_plantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../d_plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../d_plantilla/dist/js/adminlte.min.js"></script>
<!-- Toast -->
<script src="../d_plantilla/plugins/toastr/toastr.min.js"></script>
<script>
	$('#entrar').click(function(){
		$.ajax({
			type: "POST",
			url: 'validar_usuario.php',
			data: $("#form_datos").serialize(), // Adjuntar los campos del formulario enviado.
			success: function(respuesta)
			{
				if (respuesta=="2") {
					window.location="../mPanelControl/";
				}else if(respuesta=="1"){
					toastr.error('Verifica Usuario y/o Contraseña!');
				}
			}
		});
		// Evitar ejecutar el submit del formulario.
		return false;
	})
</script>
</body>
</html>
