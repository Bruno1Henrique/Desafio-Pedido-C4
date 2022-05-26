<?php
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Pedido</h3>
        <table class="striped">
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name = "cliente">
                <label for="nome">Cliente</label>
            </div>

            <div class="input-field col s12">
                <input type="date" name = "data_ped">
                <label for="nome">Data</label>
            </div>

            <div class="input-field col s12">
                <input type="number" step="0.01" name = "valor">
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
            <a href="index.php" type="submit" class="btn green"> Lista de Pedidos </a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>