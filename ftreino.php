<?php
// Start the session
session_start();

if (!isset($_SESSION['nID'])) {
    header("Location: index.php");
}
else {
    $_SESSION['nID'] = 1;
}
?>
<?php 
include 'funcoes/verifica_session_start.php';
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

        

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Ficha de Treino</li>
        </ol>
        <?php include 'funcoes/alert.php'; ?>

        <!-- Page Content -->
        <h1>Ficha de Treino</h1>
        <hr>
        <!-- ************************** INICIO DO FORMULARIO ***************************** -->
        <form method="POST" action="funcoes/regist_treino.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-1">
                <div class="form-label-group">
                  <label for="alunos">Alunos:</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <select class="form-control" id="alunos" name="usuario">
                    <?php 
                    include 'funcoes/conn.php';

                    $select = "SELECT * FROM usuario";

                    $resultado  = $conn->query($select);

                    if ($resultado->num_rows > 0) {
                      while($linha = $resultado->fetch_assoc()) {
                        $nome = $linha['nome'];
                        $id = $linha['id'];?>
                        <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                        <?php 
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
                   

            <?php include './funcoes/carrega_treino.php'; ?>
            <br>           
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>

        <!-- ************************** FIM DO FORMULARIO ***************************** -->

      </div>
      <!-- /.container-fluid -->
      <!-- Incluir esse código em todas as paginas apos o fim do conteúdo -->        
      <?php include 'template/rodape.php'; ?>
      <?php include 'template/includes.php'; ?>
      
      <script src="js/check.js"></script>
    </body>
    </html>