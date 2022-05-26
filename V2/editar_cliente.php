<?php
//Quando o usuário clica em editar dentro do pedido, está tela é responsável por retornar os dados do banco para ele ver o que irá editar

//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id ='$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Cliente</h3>
        <table class="striped">
        <form action="php_action/update_cliente.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">
          
            <div class="input-field col s12">
                <input type="text" name = "nome" value="<?php echo $dados ['nome'];?>">
                <label>Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "cpf_cnpj" value="<?php echo $dados ['cpf_cnpj'];?>">
                <label for="nome">CPF/CNPJ</label>
            </div>

            <div class="input-field col s12">
                <input type="text"  name = "telefone" value="<?php echo $dados ['telefone'];?>">
                <label for="nome">Telefone</label>
            </div>

            <div class="input-field col s12">
                <input type="text" step = "0.1"  name = "email" value="<?php echo $dados ['email'];?>">
                <label for="nome">E-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="text"  name = "cep" value="<?php echo $dados ['cep'];?>">
                <label for="nome">CEP</label>
            </div>

            <div class="input-field col s12">
                <input type="text"   name = "logradouro" value="<?php echo $dados ['logradouro'];?>">
                <label for="nome">Logradouro</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "numero" value="<?php echo $dados ['numero'];?>">
                <label for="nome">Numero</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name = "bairro" value="<?php echo $dados ['bairro'];?>">
                <label for="nome">Bairro</label>
            </div>

            
            <div class="input-field col s12">
                <input type="text" name = "cidade" value="<?php echo $dados ['cidade'];?>">
                <label for="nome">Cidade</label>
            </div>

            
            <div class="input-field col s12">
                <input type="text" name = "estado" value="<?php echo $dados ['estado'];?>">
                <label for="nome">Estado</label>
            </div>

            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="observacao"><?php echo $dados ['observacao'];?></textarea>
                <label for="textarea1">Observação</label>
            </div>

            <button type="submit" class="btn" name="btn-editar-cliente"> Atualizar </button>&nbsp;
            <a href="index.php" type="submit" class="btn green"> Lista de clientes </a>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>