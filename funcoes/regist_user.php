<?php  
session_start();
include 'conn.php';

$cpf = $_POST['cpf'];

if (validaCPF($cpf)) {

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
		1)";

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
	$_SESSION['msg']	= 'CPF inválido';
	header('Location:../register.php');
	exit();
}






function validaCPF($cpf) {

    // Extrai somente os números
	$cpf = preg_replace( '/[^0-9]/is', '', $cpf );

    // Verifica se foi informado todos os digitos corretamente
	if (strlen($cpf) != 11) {
		return false;
	}
    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
	if (preg_match('/(\d)\1{10}/', $cpf)) {
		return false;
	}
    // Faz o calculo para validar o CPF
	for ($t = 9; $t < 11; $t++) {
		for ($d = 0, $c = 0; $c < $t; $c++) {
			$d += $cpf{$c} * (($t + 1) - $c);
		}
		$d = ((10 * $d) % 11) % 10;
		if ($cpf{$c} != $d) {
			return false;
		}
	}
	return true;
}

