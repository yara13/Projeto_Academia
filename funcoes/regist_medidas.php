<?php  
session_start();
include 'conn.php';
$nome_usuario = $_SESSION['nome_usuario'];



$sql = "INSERT INTO medidas 
		( 
			peso, 
			altura, 
			taxa_gordura, 
			data_avaliacao, 
			fk_usuario_id, 
			b_direito, 
			b_esquerdo, 
			torax,
			ante_b_dir,
			ante_b_esq,
			abdominal,
			quadril,
			cintura,
			coxa_dir,
			coxa_esq,
			pant_dir,
			pant_esq
			)
		VALUES
		(
			'$_POST[peso]',
			'$_POST[altura]',
			'$_POST[taxa_gordura]',
			'$_POST[data_avaliacao]',
			'$_POST[usuario]',
			'$_POST[b_direito]',
			'$_POST[b_esquerdo]',
			'$_POST[torax]',
			'$_POST[ante_b_dir]',
			'$_POST[ante_b_esq]',
			'$_POST[abdominal]',
			'$_POST[quadril]',
			'$_POST[cintura]',
			'$_POST[coxa_dir]',
			'$_POST[coxa_esq]',
			'$_POST[pant_dir]',
			'$_POST[pant_esq]'
		)";


	if ($conn->query($sql) === TRUE) {

		$_SESSION['check'] 	= 1;
		$_SESSION['msg']	= 'Medidas cadastradas';
		$_SESSION['alert_color']	= 1;
		header('Location:../ftreino.php');
		exit();

	} else {

		$_SESSION['check'] 	= 1;
		$_SESSION['msg']	= "Error: " . $sql . "<br>" . $conn->error;
		header('Location:../fmedidas.php');
		exit();



	}
