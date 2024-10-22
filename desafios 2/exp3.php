

<?php
// Inicializa a mensagem.
$idade = "";


// Verifica se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a senha digitada pelo usuário.
    $idade = $_POST['tempo'];

    // Verifica se a senha está correta.
    if ($idade >= 18) {
        $mensagem = "Você e maior de idade.";
    } else {
        $mensagem = "Você e menor de idade.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
</head>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number" name="tempo" required><br><br>
        <input type="submit" name="submit" value="apresentar">
    </form>

    <h1>Verificação de Idade</h1>
    <p><?php echo $mensagem; ?></p>
    <p>Sua idade: <?php echo $idade; ?></p>
</body>

</html>