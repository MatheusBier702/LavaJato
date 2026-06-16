<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$dataNasc = $_POST['dataNasc'];

$sql = "UPDATE usuarios
SET
    nomeUsuarios = :nome,
    celularUsuarios = :celular,
    emailUsuarios = :email,
    dataNascUsuarios = :dataNasc
WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':celular', $celular);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':dataNasc', $dataNasc);
$stmt->bindParam(':id', $id);

if($stmt->execute()){
    header("Location: consultausuario.html");
}else{
    echo "Erro ao atualizar";
}
?>