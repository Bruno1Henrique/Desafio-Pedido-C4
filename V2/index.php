<?php
//Tela inicial do sistema

//Conexão
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilo_index.css">
</head>
<body>
    <nav>
      <div class="nav-wrapper blue">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="meus_pedidos.php">Meus Pedidos</a></li>
          <li><a href="meus_clientes.php">Meus Clientes</a></li>
        </ul>
      </div>
    </nav>
    <div class="h3">
      <h3>Bem-vindo ao sistema de pedidos</h3>
    </div>
</body>

<?php
include_once 'includes/footer.php'
?>