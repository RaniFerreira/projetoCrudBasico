<?php
include 'conexao.php';
$id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Produtos</title>
</head>

<body>
    <section>
        <div class="container tamanhoForm">
            <form action="atualizarProduto.php" method="POST">
                <?php
                $sql = "SELECT * FROM `produtos` WHERE idProduto = $id";

                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $idProduto      = $array["idProduto"];
                    $numProduto     = $array["numProduto"];
                    $nomeProduto    = $array["nomeProduto"];
                    $qtdProduto     = $array["qtdProduto"];
                    $catProduto     = $array["catProduto"];
                    $forn           = $array["forn"];
                ?>


                <h3 style="text-align: center;">Editar Produtos</h3>
                <div class="form-group">
                    <label>Código Produto</label>
                    <input type="number" class="form-control" name="numProduto" value = "<?php echo $numProduto ?>">

                    <input type="number" class="form-control" name="id" value = "<?php echo $id ?>" style="display:none;">

                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value = "<?php echo $nomeProduto ?>">

                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="qtdProduto" value = "<?php echo $qtdProduto ?>">

                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="catProduto">
                        <option>Headsets</option>
                        <option>Mouse</option>
                        <option>Teclado</option>
                        <option>Monitor</option>
                        <option>Software</option>
                        <option>Mousepad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fornecedores</label>
                    <select class="form-control" name="forn">
                        <option>Microsoft</option>
                        <option>Multilaser</option>
                        <option>Positivo</option>
                        <option>Lenovo</option>
                        <option>LG</option>
                        <option>Apple</option>
                    </select>
                </div>
                <div class="botao">
                    <button type="submit" class="btn btn-secondary">Editar</button>
                </div>
                
                <?php  }?>

            </form>
        </div>

    </section>

</body>

</html>