<?php  

include 'conn.php';

if ($_POST['senha'] == $_POST['confirmSenha']) {

	$sql = "INSERT INTO endereco (rua, numero, complemento, cidade, cep, fk_estado_id) 
	VALUES 
	('$_POST[rua]',
	'$_POST[num]',
	'$_POST[complemento]',
	'$_POST[cidade]',
	'$_POST[cep]',
	'$_POST[estado]')";

	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		$data = '2019-11-21 11:27:01';
		$sql2 = "INSERT INTO usuario (telefone, cpf, email, fk_endereco_id, data_de_nascimento, nome, data_cadastro, sexo, tipo)
		VALUES 
		('$_POST[telefone]',
		'$_POST[cpf]',
		'$_POST[email]', 
		'$last_id',
		'$_POST[data_de_nascimento]',
		'$_POST[nome]',
		'$data',
		'$_POST[sexo]',
		2)";

		if ($conn->query($sql2) === TRUE) {
			$_SESSION['nome_usuario'] 	= $_POST['nome'];

			$_SESSION['check'] 	= 1;
			$_SESSION['msg']	= 'Usuário cadastrado';
			$_SESSION['alert_color']	= 1;
			header('Location:../fmedidas.php');
			exit();

		} else {

			echo "Error: " . $sql2 . "<br>" . $conn->error;


		}
	} else {

		echo "Error: " . $sql . "<br>" . $conn->error;


	}
	
}else{
	$_SESSION['check'] 	= 1;
	$_SESSION['msg']	= 'Senha diferente da confirmação';
	header('Location:../register.php');
	exit();
}