<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        $usuarioV = "programador";
        $senhaV = "12345pr";
        $tokenV = "PROGRAMAR";

        $mensagem = "";
        $mensagemsucess = "";

        //**************//

       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'] ?? '';
        $senha = $_POST['senha'] ?? '';
        $token = $_POST['token'] ?? '';

        if ($usuario !== '' && $senha !== '') {
            if ($usuario === $usuarioV && $senha === $senhaV) {
                $mensagemsucess = "Usuário e senha corretos";
            } else {
                $mensagem = "Usuário ou senha incorretos";
            }
        } elseif ($token !== '') {
            if ($token === $tokenV) {
                $mensagemsucess = "Token correto";
            } else {
                $mensagem = "Token incorreto";
            }
        } else {
            $mensagem = "Preencha os campos para acessar.";
        }
    }
    
    

    ?>
    <main>
        <div class="login">
            <form method="POST">
                <input type="text" id="usuario" name="usuario" placeholder="Usuário">
                <br><br>
                <input type="password" id="senha" name="senha" placeholder="Digite a senha">
                <br><br>
                <input type="password" id="token" name="token" placeholder="Digite o token">
                <br><br>
                <input type="submit" class="button" value="Enviar ">
            </form>
            <p class="mensagem"><?php echo $mensagem; ?></p>
            <p class="mensagemsucess"><?php echo $mensagemsucess; ?></p>
        </div>
    </main>

</body>
</html>