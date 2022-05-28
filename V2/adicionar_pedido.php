<?php

//Conexão
require_once 'php_action/db_connect.php';
include_once 'includes/header.php';

$sql = "SELECT * FROM clientes";
$sql = mysqli_query($connect,$sql);


?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Pedido</h3>
        <table class="striped">
        <form action="php_action/create_pedido.php" method="POST">
            
            <div class="input-field col s12">
                <select name = "cliente">
                    <?php while($row1 = mysqli_fetch_assoc($sql)):;?>
                        <option value="<?php echo $row1['nome'];?>"><?php echo $row1['nome'];?></option>
                    <?php endwhile;?>
                </select>
                <label for="nome">Cliente</label>
            </div>

            

            <div class="input-field col s12">
                <input type="date" name = "data_ped">
                <label for="nome">Data</label>
            </div>

            <div class="input-field col s12">
                <input type="number" step="0.001" name = "valor">
                <label for="nome">Valor</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "produto">
                <label for="nome">Produto</label>
            </div>

            <div class="input-field col s12">
                <textarea  class="materialize-textarea" type="text" name = "observacao"></textarea>
                <label for="textarea1">Observação</label>
            </div>

            <button type="submit" class="btn" name="btn-cadastrar"> Cadastrar </button>&nbsp;
            <a href="meus_pedidos.php" type="submit" class="btn green"> Lista de Pedidos </a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'

?>