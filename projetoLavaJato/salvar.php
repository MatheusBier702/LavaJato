<?php 
include 'conexao.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $dataNasc = $_POST["dataNasc"];
    

    //    veiculo
    $placaCarro = $_POST["placaCarro"];
    $marcaCarro = $_POST["marcaCarro"];
    $anoCarro = $_POST["anoCarro"];

    try {
        $sql = "INSERT INTO usuarios (nomeUsuarios, cpfUsuarios, celularUsuarios, emailUsuarios, dataNascUsuarios) VALUES (:nome, :cpf, :celular, :email, :dataNasc)";
        $sql2 = "INSERT INTO veiculos (placaCarro, marcaCarro, anoCarro) VALUES (:placaCarro, :marcaCarro, :anoCarro)";
        $stmt = $pdo->prepare($sql);
        $stmt2 = $pdo->prepare($sql2);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":celular", $celular);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":dataNasc", $dataNasc);
        $stmt2->bindParam(":placaCarro", $placaCarro);
        $stmt2->bindParam(":marcaCarro", $marcaCarro);
        $stmt2->bindParam(":anoCarro", $anoCarro);

        if($stmt->execute() && $stmt2->execute()) {
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='index.php';</script>";
        } else {
            echo "Erro ao salvar!";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo 'Metodo invalido';
}

?>