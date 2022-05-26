<?php
//Arquivos de conexão com o banco de dados que inserem os dados do cliente 

//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar-cliente'])):

		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$cpf_cnpj = mysqli_escape_string($connect, $_POST['cpf_cnpj']);
		$fone = mysqli_escape_string($connect, $_POST['fone']);
		$email = mysqli_escape_string($connect, $_POST['email']);
		$cep = mysqli_escape_string($connect, $_POST['cep']);
        $logradouro = mysqli_escape_string($connect, $_POST['logradouro']);
        $numero = mysqli_escape_string($connect, $_POST['numero']);
        $bairro = mysqli_escape_string($connect, $_POST['bairro']);
        $cidade = mysqli_escape_string($connect, $_POST['cidade']);
        $estado = mysqli_escape_string($connect, $_POST['estado']);


		$sql = "INSERT INTO clientes (nome, cpf_cnpj, telefone, email, cep, logradouro, numero, bairro, cidade, estado) VALUES ('$nome','$cpf_cnpj','$telefone','$email','$cep','$logradouro','$numero','$bairro','$cidade','$estado')";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
			header('Location: ../index.php');
		} else {
			$_SESSION['mensagem'] = "Erro ao cadastrar";
			header('Location: ../index.php');
		}



endif;

?>