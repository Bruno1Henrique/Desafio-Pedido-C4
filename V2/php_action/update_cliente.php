<?php
//Responsável pela ação de dar o update nos dados que foram editados do cliente

//Sessão
session_start();
//Conexão
require_once 'db_connect.php';
//clear
function clear($input){
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-editar-cliente'])):

        $id = clear($_POST['id']);
		$nome = clear($_POST['nome']);
		$cpf_cnpj = clear($_POST['cpf_cnpj']);
		$email = clear($_POST['email']);
        $telefone = clear ($_POST['telefone']);
		$cep = clear($_POST['cep']);
        $logradouro = clear($_POST['logradouro']);
		$numero = clear($_POST['numero']);
        $bairro = clear($_POST['bairro']);
        $cidade = clear($_POST['cidade']);
        $estado = clear($_POST['estado']);
        $observacao = clear($_POST['observacao']);
		
		$sql = "UPDATE clientes SET nome = '$nome', cpf_cnpj = '$cpf_cnpj', email = '$email', telefone = '$telefone',cep = '$cep', logradouro = '$logradouro',  numero = '$numero', bairro = '$bairro', cidade = '$cidade', estado = '$estado', observacao = '$observacao' WHERE id = '$id'";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
			header('Location: ../index.php');
		} else {
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: ../index.php');
		}

endif;

?>