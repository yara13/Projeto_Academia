<?php  
session_start();
include 'conn.php';
if ($_POST['senha'] == $_POST['confirmSenha']) {








	$_SESSION['check'] 	= 1;
	$_SESSION['msg']	= 'Seja bem vindo';
	$_SESSION['msg']	= 1;
	header('Location:../fmedidas.php');
	exit();
}else{
	$_SESSION['check'] 	= 1;
	$_SESSION['msg']	= 'Senha diferente da confirmação';
	header('Location:../register.php');
	exit();
}