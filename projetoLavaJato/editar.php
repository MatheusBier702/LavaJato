<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/editar.css">
</head>

<body>
    <div class="container">

        <div class="topo">
            <h1>Editar Usuário</h1>
            <p>Atualize as informações do usuário</p>
        </div>

        <form action="update.php" method="POST">

            <input type="hidden"
                name="id"
                value="<?php echo $usuario['id']; ?>">

            <div class="card">

                <div class="grid">

                    <div class="input-group">
                        <label>Nome</label>
                        <input type="text"
                            name="nome"
                            value="<?php echo $usuario['nomeUsuarios']; ?>">
                    </div>

                    <div class="input-group">
                        <label>Celular</label>
                        <input type="text"
                            name="celular"
                            value="<?php echo $usuario['celularUsuarios']; ?>">
                    </div>

                </div>

                <div class="input-group">
                    <label>Email</label>
                    <input type="email"
                        name="email"
                        value="<?php echo $usuario['emailUsuarios']; ?>">
                </div>

                <div class="input-group">
                    <label>Data de Nascimento</label>
                    <input type="date"
                        name="dataNasc"
                        value="<?php echo $usuario['dataNascUsuarios']; ?>">
                </div>

                <div class="buttons">

                    <button type="submit" class="btn-primary">
                        Finalizar Cadastro
                    </button>
                </div>
                <div class="buttons">
                    <a href="painel.php" class="btn-secondary">
                        Cancelar
                    </a>
                </div>


            </div>

        </form>

    </div>
</body>

</html>