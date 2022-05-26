<?php
//Tela que é aberta quando o usuário clica para cadastrar um novo pedido

include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <table class="striped">
        <form action="php_action/create_cliente.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name = "nome">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "cpf_cnpj">
                <label for="nome">CPF/CNPJ</label>
            </div>

            <div class="input-field col s12">
                <input type="text" step="0.01" name = "telefone">
                <label for="nome">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "email">
                <label for="nome">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "cep">
                <label for="nome">CEP</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "logradouro">
                <label for="nome">Logradouro</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "numero">
                <label for="nome">Número</label>
            </div>

            
            <div class="input-field col s12">
                <input type="text" name = "bairro">
                <label for="nome">Cidade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "cidade">
                <label for="nome">Cidade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "estado">
                <label for="nome">Estado</label>
            </div>

            <div class="input-field col s12">
                <textarea  class="materialize-textarea" type="text" name = "observacao"></textarea>
                <label for="textarea1">Observação</label>
            </div>

            <button type="submit" class="btn" name="btn-cadastrar-cliente"> Cadastrar </button>&nbsp;
            <a href="meus_clientes.php" type="submit" class="btn green"> Lista de Clientes </a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>