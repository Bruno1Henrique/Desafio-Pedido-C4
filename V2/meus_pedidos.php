<?php
//Retorna uma lista com todos os pedidos

//Conexão
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';


?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Pedidos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Número:</th>
                    <th>Nome: </th>
                    <th>Data: </th>
                    <th>Valor: </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pedidos";
                $resultado = mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado) > 0):
                while($dados = mysqli_fetch_array($resultado)):

                ?>

                <tr>
                    <td><?php echo $dados ['numero'];?></td>
                    <td><?php echo $dados ['cliente'];?></td>
                    <td><?php echo $dados ['data_ped'];?></td>
                    <td><?php echo $dados ['valor'];?></td>
                    <td><a href="editar_pedido.php?numero=<?php echo $dados ['numero']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

                    <td><a href="#modal<?php echo $dados ['numero'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</id></a></td>


                    <div id="modal<?php echo $dados ['numero'];?>" class="modal">
                        <div class="modal-content">
                        <h4>Quer realmente deletar esse pedido?</h4>    
                        </div>
                        <div class="modal-footer">

                        <form action="php_action/delete_pedido.php" method="POST">
                            <input type="hidden" name="numero" value="<?php echo $dados ['numero'];?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
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
                </tr>

            <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar_pedido.php" class="btn">Cadastrar Pedido</a>
        <br>
        <br>
        <a href="index.php"> <i  style="font-size: 30px" class="large material-icons" >arrow_back</i></a>
    </div>
    </div>
</div>

<?php
include_once 'includes/footer.php'
?>