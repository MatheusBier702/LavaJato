<?php
include 'conexao.php';

$busca = $_POST['busca'];

$sql = "SELECT * FROM usuarios
        WHERE nomeUsuarios LIKE :busca";

$comando = $pdo->prepare($sql);

$pesquisa = "%$busca%";

$comando->bindParam(':busca', $pesquisa);

$comando->execute();


$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Resultado da Busca</title>
<link rel="stylesheet" href="./style/consultaUser.css">
</head>

<body>

    <div class="container">

        <h1>Resultado da Busca</h1>

        <?php
        if(count($resultado) > 0){

        ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
        </tr>

        <?php
        foreach($resultado as $dados){
        ?>

        <tr>
            <td>
                <?php echo $dados['id']; ?>
            </td>
            <td>
                <?php echo $dados['nomeUsuarios']; ?>
            </td>
             <td>
                <?php echo $dados['celularUsuarios']; ?>
            </td>
             <td>
                <?php echo $dados['emailUsuarios']; ?>
            </td>
             <td>
                <?php echo $dados['dataNascUsuarios']; ?>
            </td>
        </tr>

        <?php
        }
        ?>
    </table>
    <?php
    }else{
    ?>
    <h3>
        Usuário não encontrado.
    </h3>
    <?php
    }
    ?>
    <br><br>

    <a href="consultausuario.html" class="voltar"></a>

</div>

</body>
</html>