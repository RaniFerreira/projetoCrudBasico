<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <section>
        <div class="container tamanhoForm">
            <form action="inserirProduto.php" method="POST">
                <h3 style="text-align: center;">Cadastro de Produtos</h3>
                <div class="form-group">
                    <label>Código Produto</label>
                    <input type="number" class="form-control" name ="numProduto" placeholder = "Entre com o código" required>

                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name = "nomeProduto" placeholder = "Entre com o nome do produto" required>

                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name = "qtdProduto" placeholder = "Entre com a quantidade" required>

                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name = "catProduto">
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
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>

    </section>

</body>

</html>