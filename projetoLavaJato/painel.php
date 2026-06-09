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

       
        <li>
            <a href="./cadastroUser.php">
                <i class="fas fa-user-plus"></i>
                Cadastrar Cliente
            </a>
        </li>

        <li>
            <a href="./consultausuario.html">
                <i class="fas fa-users"></i>
                Consultar Clientes
            </a>
        </li>

       
        <li>
            <a href="logoff.php">
                <i class="fas fa-sign-out-alt"></i>
                Sair
            </a>
        </li>

    </ul>

</div>

<div class="main">

    <header>

        <h1>Painel Administrativo</h1>

        <div class="usuario">
            Administrador
        </div>

    </header>

    <section class="conteudo">

        <div class="titulo-pagina">
            Clientes
        </div>

        <div class="card">

            <button class="btn-novo">
                Novo Cliente
            </button>

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Veículo</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Carlos</td>
                        <td>11999999999</td>
                        <td>Fiat Toro</td>

                        <td>

                            <a href="#">
                                <i class="fas fa-edit editar"></i>
                            </a>

                            <a href="#">
                                <i class="fas fa-trash excluir"></i>
                            </a>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </section>

</div>

</body>
</html>