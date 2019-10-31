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
          <li class="breadcrumb-item active">Ficha de Medidas</li>
        </ol>

        <!-- Page Content -->
        <h1>Ficha de Medidas</h1>
        <hr>

        	<!-- ************************** INICIO DO FORMULARIO ***************************** -->
	<form method="POST" action="ftreino.php">
		<div class="form-group">
			<label for="name">Data:</label> 
			<input type="date" class="form-control" name="name" > </br>

			<label for="name">Peso:</label> 
			<input type="number" class="form-control" name="name" > </br>

			<label for="name">Altura:</label> 
			<input type="number" class="form-control" name="name"> </br>

			<label for="name">B.dir:</label> 
			<input type="number" class="form-control" name="name"> </br>

			<label for="name">B.Esq:</label> 
			<input type="number" class="form-control" name="name"> </br>

			<label for="name">Torax:</label>
			<input type="number" class="form-control" name="torax">

			<label for="name">Ante.B.Dir:</label>
			<input type="number" class="form-control" name="ante.braço" placeholder>
			
			<label for="name">Ante.B.Esq:</label>
			<input type="number" class="form-control" name="ante.braço" placeholder>

			<label for="name">Ante.B.Esq:</label>
			<input type="number" class="form-control" name="ante.braço" placeholder>

			<label for="name">Abdomen:</label>
			<input type="number" class="form-control" name="abdomen" placeholder>

			<label for="name">Quadril:</label>
			<input type="number" class="form-control" name="ante.braço" placeholder>

			<label for="name">Cintura:</label>
			<input type="number" class="form-control" name="cintura" placeholder>P

			<label for="name">Coxa.dir:</label>
			<input type="number" class="form-control" name="coxa.dir" placeholder>
			
			<label for="name">Coxa.Esq:</label>
			<input type="number" class="form-control" name="coxa.esq" placeholder>

			<label for="name">Pant.Dir:</label>
			<input type="number" class="form-control" name="pant.dir" placeholder>

			<label for="name">IMC:</label>
			<input type="number" class="form-control" name="imc" placeholder>
			
			<label for="name">Porcentagem de Gorduara:</label>
			<input type="number" class="form-control" name="gordura" placeholder>
			
			
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
  </html>