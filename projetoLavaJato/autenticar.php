<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$senha   = isset($_POST['senha'])   ? trim($_POST['senha'])   : '';

if (empty($usuario) || empty($senha)) {
    $msg = urlencode('Preencha o e-mail e o CPF.');
    header("Location: login.php?status=error&message=$msg");
    exit;
}

$sql = "SELECT * FROM usuarios WHERE emailUsuarios = :email AND cpfUsuarios = :cpf LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $usuario);
$stmt->bindParam(':cpf',   $senha);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $_SESSION['usuario_id']   = $user['id'];
    $_SESSION['usuario_nome'] = $user['nomeUsuarios'];

    $msg = urlencode('Bem-vindo, ' . $user['nomeUsuarios'] . '!');
    header("Location: login.php?status=success&message=$msg");
} else {
    $msg = urlencode('E-mail ou CPF incorretos. Verifique e tente novamente.');
    header("Location: login.php?status=error&message=$msg");
}
exit;
