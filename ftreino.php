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
            <br>    <br>            

            <h2> Ergometria</h2>
            <br> 
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-1">
                  <div class="form-label-group" align="right">
                    <label for="esteira">Esteira: </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-label-group">
                    <select class="form-control" id="esteira">
                      <option>0</option>
                      <option>5</option>
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                      <option>35</option>
                      <option>40</option>
                      <option>45</option>
                      <option>50</option>
                      <option>55</option>
                      <option>60</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-label-group" align="right">
                    <label for="bicicleta">Bicicleta: </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-label-group">
                    <select class="form-control" id="bicicleta">
                      <option>0</option>
                      <option>5</option>
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                      <option>35</option>
                      <option>40</option>
                      <option>45</option>
                      <option>50</option>
                      <option>55</option>
                      <option>60</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-label-group" align="right">
                    <label for="eliptica">Eliptica: </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-label-group">
                    <select class="form-control" id="eliptica">
                      <option>0</option>
                      <option>5</option>
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                      <option>35</option>
                      <option>40</option>
                      <option>45</option>
                      <option>50</option>
                      <option>55</option>
                      <option>60</option>
                    </select>
                  </div>
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
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
      </style>
      <script src="js/check.js"></script>
    </body>
    </html>