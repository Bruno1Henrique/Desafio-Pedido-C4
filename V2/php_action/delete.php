<?php
//Sessão
session_start();
//Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    
        $numero = mysqli_escape_string($connect, $_POST['numero']);

        $sql = "DELETE FROM pedidos where numero = '$numero'";
        
            if (mysqli_query($connect, $sql)):
                $_SESSION['mensagem'] = "Deletado com sucesso!";
                header('Location: ../index.php');
            else: 
                $_SESSION['mensagem'] = "Erro ao deletar";
                header('Location: ../index.php');
            endif;
endif;

?>