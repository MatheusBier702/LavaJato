<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>

    <link rel="stylesheet" href="style/cadastroUser.css">
</head>
<body>

    <div class="container">

        <div class="topo">
            <div class="logo">
                
            </div>

            <h1>Cadastro de Cliente</h1>
            <p>Bem-vindo ao sistema automotivo</p>
        </div>

        <form method="POST" action="./salvar.php">

            <div class="card">

                <h2>Dados do Cliente</h2>

                <div class="input-group full">
                    <label>Nome Completo</label>
                    <input type="text" name="nome" placeholder="Nome Completo" require>
                </div>

                <div class="grid-2">

                    <div class="input-group">
                        <label>CPF</label>
                        <input type="text" name="cpf" placeholder="123.456.789-00" require>
                    </div>

                    <div class="input-group">
                        <label>Celular / WhatsApp</label>
                        <input type="text" name="celular" placeholder="(11) 99999-9999" require>
                    </div>

                    <div class="input-group">
                        <label>E-mail</label>
                        <input type="email" name="email" placeholder="email@email.com" require>
                    </div>

                    <div class="input-group">
                        <label>Data de Nascimento</label>
                        <input type="date" name="dataNasc" placeholder="00/00/0000" require>
                    </div>

                </div>

            </div>

            <div class="card">

                <h2>Dados do Veículo</h2>

                <div class="grid-3">

                    <div class="input-group">
                        <label>Placa do Carro</label>
                        <input type="text" name="placaCarro" placeholder="ABC-1234" require>
                    </div>

                    <div class="input-group">
                        <label>Marca / Modelo</label>
                        <input type="text" name="marcaCarro" placeholder="Honda Civic" require>
                    </div>

                    <div class="input-group">
                        <label>Ano</label>
                        <input type="text" name="anoCarro" placeholder="2026" require>
                    </div>

                </div>

            </div>

            <div class="buttons">

                <button type="submit" class="btn-primary">
                    Finalizar Cadastro
                </button>

                <button type="submit" class="btn-secondary">
                    Cancelar
                </button>

            </div>

        </form>

    </div>

</body>
</html>