<?php
include 'funcoes/verifica_session_start.php';
header('Content-Type: text/html; charset=utf-8');
include ('funcoes/conn.php');
//include ('funcoes/verifica_login.php');


?>
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>

</head>

<body class="bg-dark">

  <div class="form-group">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header" align="center">Cadastrar Aluno</div>
        <div class="card-body">
          
          <?php include 'funcoes/alert.php'; ?>

          <form method="post" action="funcoes/regist_user.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="firstName" class="form-control" placeholder="Nome completo" required="required" name="nome">
                <label for="firstName">Nome completo</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">

                <div class="col-md-3">
                  
                  <div class="form-label-group">

                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="masculino" name="sexo" checked>
                      <label class="custom-control-label" for="masculino">Masculino</label>
                    </div>
                  </div>
                
                  <div class="form-label-group">
                    <div class="custom-control custom-radio"> 
                      <input type="radio" class="custom-control-input" id="feminino" name="sexo">
                      <label class="custom-control-label" for="feminino">Feminino</label>
                    </div>
                  </div>
                </div>

                <div class="col-md">
                  <div class="form-label-group">
                    <input type="number" id="cpf" class="form-control" placeholder="cpf" required="required" name="cpf">
                    <label for="cpf">CPF</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="dtnascimento" class="form-control" placeholder="Data Nascimento" required="required" autofocus="autofocus" name="data_de_nascimento">
                    <label for="dtnascimento">Data Nascimento</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="number" id="telefone" class="form-control" placeholder="telefone" required="required" name="telefone">
                    <label for="telefone">Telefone</label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="inicio" class="form-control" placeholder="Inicio" required="required" autofocus="autofocus" name="data_cadastro">
                    <label for="inicio">Inicio</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="required" name="email">
                <label for="inputEmail">Email</label>
              </div>
                </div>

              </div>
            </div>
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required" name="senha">
                    <label for="inputPassword">Senha</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirma Senha" required="required" name="confirmSenha">
                    <label for="confirmPassword">Confirma Senha</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
           
          </form>
          <div class="text-center">
            

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
