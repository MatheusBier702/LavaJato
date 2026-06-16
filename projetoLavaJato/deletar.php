<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id);

if($stmt->execute()){
    header("Location: consultausuario.html");
}else{
    echo "Erro ao excluir";
}
?>