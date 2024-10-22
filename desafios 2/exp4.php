<?php
// Declaração e atribuição de uma variável do tipo float.
$peso = 0;
// Mensagem baseada no peso.
if ($peso >= 70.0) {
    $mensagem = "Seu peso está acima do recomendado.";
} elseif ($peso >= 50.0 && $peso < 70.0) {
    $mensagem = "Seu peso está dentro do recomendado.";
} else {
    $mensagem = "Seu peso está abaixo do recomendado.";
}
?>

<?php
$peso = 0;

// Verifica se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a senha digitada pelo usuário.
    $peso = $_POST['peso'];
    if ($peso >= 70.0) {
        $mensagem = "Seu peso está acima do recomendado.";
    } elseif ($peso >= 50.0 && $peso < 70.0) {
        $mensagem = "Seu peso está dentro do recomendado.";
    } else {
        $mensagem = "Seu peso está abaixo do recomendado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Peso</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number" name="peso" required><br><br>
        <input type="submit" name="submit" value="apresentar">
    </form>


    <h1>Verificação de Peso</h1>
    <p><?php echo $mensagem; ?></p>
    <p>Seu peso: <?php echo $peso; ?> kg</p>
</body>

</html>