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
				<form method="POST" action="funcoes/regist_medidas.php" class="was-validated">
					

					<div class="form-group">
						<label for="exampleFormControlSelect1">Example select</label>
						<select class="form-control" id="exampleFormControlSelect1" name="fk_usuario_id">
							<option></option>
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

					<div class="form-group">
						<div class="form-label-group">

							<input type="date" class="form-control" name="data_avaliacao" required=""required="">
							<label for="name">Data:</label> 
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="peso" required="">
							<label for="name">Peso:</label> 
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="altura"required="">
							<label for="name">Altura:</label> 
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="b_direito"required="">
							<label for="name">B.dir:</label> 
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="b_esquerdo"required="">
							<label for="name">B.Esq:</label> 
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="torax"required="">
							<label for="name">Torax:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="ante_b_dir" required="">
							<label for="name">Ante.B.Dir:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="ante_b_esq" required="">
							<label for="name">Ante.B.Esq:</label>
						</div>
					</div>


					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="abdominal" required="">
							<label for="name">Abdomen:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="quadril" required="">
							<label for="name">Quadril:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="cintura" required="">
							<label for="name">Cintura:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="coxa_dir" required="">
							<label for="name">Coxa.dir:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="coxa_esq" required="">
							<label for="name">Coxa.Esq:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="pant_dir" required="">
							<label for="name">Pant.Dir:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" name="pant_esq" required="">
							<label for="name">Pant.Esq:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control" required="">
							<label for="name">IMC:</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">

							<input type="number" class="form-control"  name="taxa_gordura"required="">
							<label for="name">Porcentagem de Gorduara:</label>


							<br>
							<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
					</div>
				</form>

				<!-- ************************** FIM DO FORMULARIO ***************************** -->


				<!-- /.container-fluid -->
				<!-- Incluir esse código em todas as paginas apos o fim do conteúdo -->        
				<?php include 'template/rodape.php'; ?>
				<?php include 'template/includes.php'; ?>
				</html>