<?php
//Retorna uma lista com todos os clientes

//Conexão
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Id:</th>
                    <th>Nome:</th>
                    <th>CEP:</th>
                    <th>Logradouro:</th>
                    <th>Telefone:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) > 0):
                while($dados = mysqli_fetch_array($resultado)):

                ?>

                <tr>
                    <td><?php echo $dados ['id'];?></td>
                    <td><?php echo $dados ['nome'];?></td>
                    <td><?php echo $dados ['cep'];?></td>
                    <td><?php echo $dados ['logradouro'];?></td>
                    <td><?php echo $dados ['telefone'];?></td>
                    <td><a href="editar_cliente.php?id=<?php echo $dados ['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados ['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</id></a></td>


                    <div id="modal<?php echo $dados ['id'];?>" class="modal">
                        <div class="modal-content">
                        <h4>Quer realmente deletar esse cliente?</h4>    
                        </div>
                        <div class="modal-footer">
                        <form action="php_action/delete_cliente.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados ['id'];?>">

                            <button type="submit" name="btn-deletar-cliente" class="btn red">Sim, quero deletar</button>
                            <a href="#!" class="modal-close waves-effect btn-flat">Cancelar</a>
                        </form>
                        </div>
                    </div>

                </tr>
                <?php 
                endwhile;
                else: ?>

                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

            <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar_cliente.php" class="btn pink">Cadastrar Cliente</a>
        <br>
        <br>
        <a href="index.php"> <i  style="font-size: 30px" class="large material-icons" >arrow_back</i></a>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>