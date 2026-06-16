<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastrar Serviço</title>
<link rel="stylesheet" href="./style/servico.css">
</head>

<body>

<form action="salvarServico.php" method="POST">

    <h2>Cadastrar Serviço</h2>

    <input type="text" name="cliente" placeholder="Nome do Cliente" required>

    <input type="text" name="veiculo" placeholder="Veículo" required>

    <select name="tipoServico" required>
        <option value="">Selecione o Serviço</option>
        <option>Lavagem Simples</option>
        <option>Lavagem Completa</option>
        <option>Polimento</option>
        <option>Higienização</option>
        <option>Cristalização</option>
    </select>

    <input type="number" step="0.01" name="valor" placeholder="Valor">

    <select name="statusServico">
        <option>Agendado</option>
        <option>Em andamento</option>
        <option>Concluído</option>
    </select>

    <div class="buttons">

                    <button type="submit" class="btn-primary">
                        Salvar Serviço
                    </button>
                </div>
                <div class="buttons">
                    <a href="painel.php" class="btn-secondary">
                        Cancelar
                    </a>
                </div>


</form>

</body>
</html>