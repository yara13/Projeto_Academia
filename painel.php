<?php
// Start the session
session_start();

  //ESSA VERIFICAÇAO DO IF TEM QUE SER FEITA COM OS DADOS DO BANCO
  if ($_POST["login"] == "admin@admin.com" && $_POST["senha"] == "1234") {
    $_SESSION['nID'] 	= 1;
    $_SESSION["login"] 	= $_POST["login"];
    $_SESSION["senha"] = $_POST["senha"];
   // print_r($_SESSION);
  } elseif ($_POST["login"] == "aluno@aluno.com" && $_POST["senha"] == "1234") {
    $_SESSION['nID'] 	= 2;
    $_SESSION["login"] 	= $_POST["login"];
    $_SESSION["senha"] = $_POST["senha"];
   // print_r($_SESSION);
  }

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'template/head.php'; ?>

<body id="page-top">

  <?php include 'template/cabecalho.php'; ?>
  
    <div id="wrapper">
    
      <?php include 'template/menu-lateral.php'; ?>
      
        <div id="content-wrapper">
            <div class="container-fluid">
 <!-- Incluir o código acima no incio de todas as páginas-->
 <?php 
            //ESSA VERIFICAÇAO DO IF TEM QUE SER FEITA COM OS DADOS DO BANCO
            if ($_SESSION['login'] == "admin@admin.com" && $_SESSION['senha'] == "1234") {
              include "painel_admin.php";
            } elseif ($_POST['login'] == "aluno@aluno.com" && $_POST['senha'] == "1234") {
              include "painel_aluno.php";
            }
          ?>

  <!-- /.content-wrapper -->
  <!-- Incluir esse código em todas as paginas apos o fim do conteúdo -->        
  <?php include 'template/rodape.php'; ?>
  <?php include 'template/includes.php'; ?>
  </html>
