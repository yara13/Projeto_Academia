<?php include 'funcoes/verifica_session_start.php'; ?>
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
				<?php include 'funcoes/alert.php'; ?>
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
				<form method="POST" action="funcoes/regist_medidas.php">
					<div class="form-group">
						
						<div class="form-group">
							<label for="exampleFormControlSelect1">Example select</label>
							<select class="form-control" id="exampleFormControlSelect1" name="fk_usuario_id">
								<?php 
								include 'funcoes/conn.php';
								$select = "SELECT * FROM usuario";

								$resultado 	= $conn->query($select);


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
						

						<label for="name">Data:</label> 
						<input type="date" class="form-control" name="data_avaliacao" > </br>

						<label for="name">Peso:</label> 
						<input type="number" class="form-control" name="peso" > </br>

						<label for="name">Altura:</label> 
						<input type="number" class="form-control" name="altura"> </br>

						<label for="name">B.dir:</label> 
						<input type="number" class="form-control" name="b_direito"> </br>

						<label for="name">B.Esq:</label> 
						<input type="number" class="form-control" name="b_esquerdo"> </br>

						<label for="name">Torax:</label>
						<input type="number" class="form-control" name="torax">

						<label for="name">Ante.B.Dir:</label>
						<input type="number" class="form-control" name="ante_b_dir" placeholder>

						<label for="name">Ante.B.Esq:</label>
						<input type="number" class="form-control" name="ante_b_esq" placeholder>

					

						<label for="name">Abdomen:</label>
						<input type="number" class="form-control" name="abdominal" placeholder>

						<label for="name">Quadril:</label>
						<input type="number" class="form-control" name="quadril" placeholder>

						<label for="name">Cintura:</label>
						<input type="number" class="form-control" name="cintura" placeholder>P

						<label for="name">Coxa.dir:</label>
						<input type="number" class="form-control" name="coxa_dir" placeholder>

						<label for="name">Coxa.Esq:</label>
						<input type="number" class="form-control" name="pant_esq" placeholder>

						<label for="name">Pant.Dir:</label>
						<input type="number" class="form-control" name="pant_dir" placeholder>

						<label for="name">IMC:</label>
						<input type="number" class="form-control" placeholder>

						<label for="name">Porcentagem de Gorduara:</label>
						<input type="number" class="form-control" placeholder name="taxa_gordura">


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