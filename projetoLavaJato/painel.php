<?php
include 'conexao.php';

$sql = "SELECT * FROM servicos";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Lava Rápido</title>

    <link rel="stylesheet" href="./style/painel.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <div class="sidebar">

        <div class="logo">
            <h2>Lava Rápido</h2>
        </div>

        <ul>

            </li>
            <li>
                <a href="./login.php">
                   
                🔐 Login
                </a>
            </li>
            <li>
                <a href="./cadastroUser.php">
                   
                👤 Cadastrar Cliente
                </a>
            </li>

            <li>
                <a href="./consultausuario.html">
                   
                🔍 Consultar Clientes
                </a>
            </li>
            <li>
                <a href="./servico.php">
                   
                🛠️  Cadastrar Serviço
                </a>
            </li>


            <li>
                <a href="logoff.php">
                   
                ➜]  Sair
                </a>
            </li>


        </ul>

    </div>

    <div class="main">



        <section class="conteudo">

            <div class="titulo-pagina">
                Clientes & Serviços
            </div>

            <div class="card">

                <button class="btn-novo">
                    Novo Cliente
                </button>

                <table>

                    <tr>
                        <th>Cliente</th>
                        <th>Veículo</th>
                        <th>Serviço</th>
                        <th>Valor</th>
                        <th>Status</th>
                    </tr>

                    <?php foreach ($servicos as $servico) { ?>

                        <tr>
                            <td><?= $servico['cliente'] ?></td>
                            <td><?= $servico['veiculo'] ?></td>
                            <td><?= $servico['tipoServico'] ?></td>
                            <td>R$ <?= $servico['valor'] ?></td>
                            <td><?= $servico['statusServico'] ?></td>
                        </tr>

                    <?php } ?>

                </table>

            </div>

        </section>

    </div>

</body>

</html>