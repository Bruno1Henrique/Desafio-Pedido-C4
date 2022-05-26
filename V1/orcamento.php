<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Impressão do Pedido</title>
</head>
<body>
    <div class="impressao">
        <?php


        $cliente= $_POST['cliente'];

        echo"<H1>Pedido do cliente <u>$cliente</u></H1>";

        $produto= $_POST['produto'];

        $valor= $_POST['valor'];

        $pagamento= $_POST['pagamento'];

        $data= $_POST['data'];

        echo "<div class=\"client-imp\"><b>Cliente</b>:&nbsp$cliente<br></div>";
        echo "<div class=\"product-imp\"><b>Produto</b>:&nbsp$produto<br></div>";
        echo "<div class=\"payment-imp\"><b>Valor</b>:&nbspR$&nbsp$valor&nbsp<b>Pagamento</b>:&nbsp$pagamento<br></div><br>";
        echo "<div class=\"date-imp\"><b>Data</b>&nbsp: $data";

        
        ?>
        <p>Assinatura do Cliente:________________________________________________</p><br>
        <p>Ao assinar você concorda com todos os termos de serviço e garantia.</p><br>
        
        <div class="imprimir">
		<input type="button" value="Imprimir Orçamento" class="acao" onclick="window.print()" >
        </div>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>