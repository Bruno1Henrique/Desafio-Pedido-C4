<?php
//Arquivos de conexão com o banco de dados que inserem os dados do pedido 

//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):

		$options = mysqli_escape_string($connect, $_POST['cliente']);
		$data_ped = $_POST['data_ped'];
		$valor = mysqli_escape_string($connect, $_POST['valor']);
		$produto = mysqli_escape_string($connect, $_POST['produto']);
		$observacao = mysqli_escape_string($connect, $_POST['observacao']);

		$sql = "INSERT INTO pedidos (cliente, data_ped, valor, produto, observacao) VALUES ('$options', '$data_ped', '$valor','$produto','$observacao')";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../index.php');
		} else {
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../index.php');
		}



endif;

?>