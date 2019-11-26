<?php  

include 'conn.php';

if ($_POST['senha'] == $_POST['confirmSenha']) {

	$sql = "INSERT INTO usuario ( senha, telefone, cpf, email, fk_endereco_id, data_de_nascimento, nome, data_cadastro, sexo, tipo)
	VALUES 
	('$_POST[senha]',
	'$_POST[telefone]',
	'$_POST[cpf]',
	'$_POST[email]', 2,
	'$_POST[data_de_nascimento]',
	'$_POST[nome]',
	'$_POST[data_cadastro]',
	'$_POST[sexo]',
	2)";


	if ($conn->query($sql) === TRUE) {
		$_SESSION['nome_usuario'] 	= $_POST['nome'];

		$_SESSION['check'] 	= 1;
		$_SESSION['msg']	= 'Usuário cadastrado';
		$_SESSION['alert_color']	= 1;
		header('Location:../fmedidas.php');
		exit();

	} else {

		echo "Error: " . $sql . "<br>" . $conn->error;


	}

	
}else{
	$_SESSION['check'] 	= 1;
	$_SESSION['msg']	= 'Senha diferente da confirmação';
	header('Location:../register.php');
	exit();
}