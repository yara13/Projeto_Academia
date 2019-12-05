<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portal - Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login CPF/E-mail:</div>
      <div class="card-body">
       <form class="needs-validation" novalidate action="admin.php" method="POST">

        <div class="form-group">
          <input type="text" class="form-control" id="login" placeholder="Digite seu CPF ou e-mail" required>
          <div class="invalid-feedback">
            Login Invalido
          </div>
        </div>

        <div class="form-group">
          
            <input type="password" id="senha" class="form-control" placeholder="Digite sua Senha" required>
            
            <div class="invalid-feedback">
             Senha Invalida
           </div>
        
       </div>

       <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">
            Lembrar Senha
          </label>
        </div>
      </div>

      <button class="btn btn-primary btn-sm" type="submit">Logar Aluno</button>
      <button class="btn btn-primary btn-sm" type="submit">Logar Administrador</button>
<!--
          <a class="btn btn-primary btn-block" href="areaaluno.php">Logar Aluno</a>
          <a class="btn btn-primary btn-block" href="admin.php">Logar Administrador</a>-->
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.php">Esqueceu sua Senha?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
<script type="text/javascript">

  (function() {
    'use strict';
    window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }, false);
});
}, false);
  })();

</script>
</html>
