<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Select
if(isset($_GET['numero'])):
    $numero = mysqli_escape_string($connect, $_GET['numero']);

    $sql = "SELECT * FROM pedidos WHERE numero ='$numero'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Pedido</h3>
        <table class="striped">
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="numero" value="<?php echo $dados ['numero'];?>">
          
            <div class="input-field col s12">
                <input type="text" name = "cliente" value="<?php echo $dados ['cliente'];?>">
                <label>Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="date" name = "data_ped" value="<?php echo $dados ['data_ped'];?>">
                <label for="nome">Data</label>
            </div>

            <div class="input-field col s12">
                <input type="text"  name = "produto" value="<?php echo $dados ['produto'];?>">
                <label for="nome">Produto</label>
            </div>

            <div class="input-field col s12">
                <input type="number" step = "0.1"  name = "valor" value="<?php echo $dados ['valor'];?>">
                <label for="nome">Valor</label>
            </div>

            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="observacao"><?php echo $dados ['observacao'];?></textarea>
                <label for="textarea1">Observação</label>
            </div>

            <button type="submit" class="btn" name="btn-editar"> Atualizar </button>&nbsp;
            <a href="index.php" type="submit" class="btn green"> Lista de clientes </a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>