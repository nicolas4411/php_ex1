<?php
// Inicializa a mensagem.
$mensagem = "";
$senhaCorreta = "1980"; // Senha definida no código

// Verifica se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a senha digitada pelo usuário.
    $senhaDigitada = $_POST['senha'];

    // Verifica se a senha está correta.
    if ($senhaDigitada === $senhaCorreta) {
        $mensagem = "Você possui uma conta cadastrada.";
    } else {
        $mensagem = "Você não possui uma conta cadastrada.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Conta</title>
</head>
<body>
    <h1>Verificação de Conta</h1>
    
    <form method="post">
        <label for="senha">Digite sua senha:</label><br>
        <input type="password" name="senha" id="senha" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <p><?php echo $mensagem; ?></p>
</body>
</html>
