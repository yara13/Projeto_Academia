<?php
session_start();
include 'conn.php';

$arr = $_POST['check'];

if (!$arr) {
	$_SESSION['msg'] = "Nenhum item foi selecionado";
	$_SESSION['check'] = 1;
	header("Location: ../ftreino.php");
	exit();
}




foreach($arr as $id){

	

	$select = "SELECT * FROM tipo WHERE id='$id'";
	$resul 	= $conn->query($select);
	if ($resul->num_rows > 0) {
		while($linha = $resul->fetch_assoc()) {
			$fk_grupo_id = $linha['fk_grupo_id'];
			

		}
	}

	$sql = "INSERT INTO treino (fk_usuario_id, fk_grupo_id, fk_tipo_id, carga, serie, repeticao) VALUES ('$_POST[usuario]', '$fk_grupo_id', '$id', '$_POST[carga]', '$_POST[serie]', '$_POST[repeticao]' )";

	if ($conn->query($sql) === TRUE) {

		

	} else {

		echo "Error: " . $sql . "<br>" . $conn->error;



	}
}

$_SESSION['check'] 			= 1;
$_SESSION['msg']			= 'Treino cadastrado!';
$_SESSION['alert_color']	= 1;
header("location: ../ftreino.php");
exit();