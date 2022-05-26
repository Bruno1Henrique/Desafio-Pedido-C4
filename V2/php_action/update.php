<?php
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

if(isset($_POST['btn-editar'])):
    
		$cliente = clear($_POST['cliente']);
		$data_ped = clear($_POST['data_ped']);
		$produto = clear($_POST['produto']);
		$valor = clear($_POST['valor']);
        $numero = clear($_POST['numero']);
		$observacao = clear($_POST['observacao']);
		
		$sql = "UPDATE pedidos SET cliente = '$cliente', data_ped = '$data_ped', produto = '$produto',valor = '$valor', observacao = '$observacao' WHERE numero = '$numero'";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
			header('Location: ../index.php');
		} else {
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: ../index.php');
		}

endif;

?>