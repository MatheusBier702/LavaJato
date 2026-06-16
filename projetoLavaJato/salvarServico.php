<?php

include 'conexao.php';

$cliente = $_POST['cliente'];
$veiculo = $_POST['veiculo'];
$tipoServico = $_POST['tipoServico'];
$valor = $_POST['valor'];
$statusServico = $_POST['statusServico'];

$sql = "INSERT INTO servicos
(cliente, veiculo, tipoServico, valor, statusServico)
VALUES
(:cliente, :veiculo, :tipoServico, :valor, :statusServico)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':cliente', $cliente);
$stmt->bindParam(':veiculo', $veiculo);
$stmt->bindParam(':tipoServico', $tipoServico);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':statusServico', $statusServico);

if($stmt->execute()){
    header("Location: painel.php");
}else{
    echo "Erro ao salvar serviço";
}