<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Lava Jato</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

    <?php
    $status  = isset($_GET['status'])  ? $_GET['status']  : '';
    $message = isset($_GET['message']) ? urldecode($_GET['message']) : '';
    ?>

    
    <?php if ($status): ?>
    <div class="modal-overlay show" id="modal" onclick="closeModal(event)">
        <div class="modal <?php echo $status === 'success' ? 'success' : 'error'; ?>">
            <span class="modal-icon">
                <?php echo $status === 'success' ? '✅' : '❌'; ?>
            </span>
            <h3><?php echo $status === 'success' ? 'Acesso Permitido' : 'Acesso Negado'; ?></h3>
            <p>
                <?php
                if ($message) {
                    echo htmlspecialchars($message);
                } elseif ($status === 'error') {
                    echo 'Usuário ou senha incorretos. Verifique e tente novamente.';
                }
                ?>
            </p>
            <button class="modal-btn" onclick="closeModal()">
                <?php echo $status === 'success' ? 'Continuar' : 'Tentar novamente'; ?>
            </button>
        </div>
    </div>
    <?php endif; ?>

    <div class="bg-image"></div>

    <div class="wrapper">

        <div class="login-box">

            <div class="brand">
                <div class="logo-icon">🚗</div>
                <h1>Lava<span>Jato</span></h1>
                <p>Sistema de Gestão Automotiva</p>
            </div>

            <form method="POST" action="./autenticar.php">

                <div class="input-group">
                    <label for="usuario">E-Mail</label>
                    <div class="input-wrap">
                        <span class="input-icon">👤</span>
                        <input type="text" id="usuario" name="usuario" placeholder="Digite seu E-Mail" required autofocus>
                    </div>
                </div>

                <div class="input-group">
                    <label for="senha">CPF</label>
                    <div class="input-wrap">
                        <span class="input-icon">🔒</span>
                        <input type="password" id="senha" name="senha" placeholder="Digite seu cpf" required>
                        <button type="button" class="toggle-senha" onclick="toggleSenha()" tabindex="-1" title="Mostrar/ocultar senha">👁</button>
                    </div>
                </div>

                <button type="submit" class="btn-login">
                    <span>Entrar no Sistema</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>

            </form>
            <form action="./home.html" method="post" class="form-centralizado">
            <button type="submit" class="btn-secondary">
                    Cancelar
            </button>
        </form> 

        </div>

    </div>

    <script>
        function toggleSenha() {
            const input = document.getElementById('senha');
            input.type = input.type === 'password' ? 'text' : 'password';
        }

        function closeModal(event) {
            if (event && event.target !== document.getElementById('modal')) return;
            document.getElementById('modal').classList.remove('show');
            const url = new URL(window.location.href);
            url.searchParams.delete('status');
            url.searchParams.delete('message');
            window.history.replaceState({}, '', url);
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeModal();
        });
    </script>

</body>
</html>
