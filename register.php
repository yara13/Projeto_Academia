<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portal Admin - Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

<div class="form-group">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header" align="center">Registrar uma Conta</div>
      <div class="card-body">
        <form>
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="firstName" class="form-control" placeholder="Nome completo" required="required">
              <label for="firstName">Nome completo</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
            
              <div class="col-md-3">
              <label for="sexo">Sexo</label>
                <div class="form-label-group">
                                 
<div class="custom-control custom-radio">
<input type="radio" class="custom-control-input" id="masculino" name="sexo" checked>
  <label class="custom-control-label" for="masculino">Masculino</label>
  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-label-group">
                <div class="custom-control custom-radio"> 
    <input type="radio" class="custom-control-input" id="feminino" name="sexo">
    <label class="custom-control-label" for="feminino">Feminino</label>
</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" id="cpf" class="form-control" placeholder="CPF" required="required">
                  <label for="cpf">CPF</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="dtnascimento" class="form-control" placeholder="Data Nascimento" required="required" autofocus="autofocus">
                  <label for="dtnascimento">Data Nascimento</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="number" id="telefone" class="form-control" placeholder="Telefone" required="required">
                  <label for="telefone">Telefone</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="objetivo" class="form-control" placeholder="Objetivo" required="required">
              <label for="objetivo">Objetivo</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="inicio" class="form-control" placeholder="Inicio" required="required" autofocus="autofocus">
                  <label for="inicio">Inicio</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="avaliacao" class="form-control" placeholder="Avaliação" required="required">
                  <label for="avaliacao">Avaliação</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="required">
              <label for="inputEmail">Email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required">
                  <label for="inputPassword">Senha</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirma Senha" required="required">
                  <label for="confirmPassword">Confirma Senha</label>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.php">Registrar</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Página de Login</a>
          <a class="d-block small" href="forgot-password.php">Esqueceu a Senha?</a>
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

</html>
