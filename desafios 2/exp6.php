<?php
session_start(); // Inicia a sessão

// Verifica se a sessão de frutas já existe, caso contrário, inicializa o array.
if (!isset($_SESSION['frutas'])) {
    $_SESSION['frutas'] = array("Maçã", "Banana", "Laranja", "Morango", "Abacaxi");
}

// Acessando elementos do array usando índices.
echo "<p>A primeira fruta é: " . $_SESSION['frutas'][0] . "</p>";
echo "<p>A segunda fruta é: " . $_SESSION['frutas'][1] . "</p>";

// Verifica se o formulário foi enviado para adicionar uma fruta.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['acao']) && $_POST['acao'] == 'Adicionar') {
    $novaFruta = $_POST['fruta'];
    $_SESSION['frutas'][] = $novaFruta; // Adiciona a nova fruta ao array.
}

// Verifica se o formulário foi enviado para remover uma fruta.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['acao']) && $_POST['acao'] == 'Remover') {
    $frutaARemover = $_POST['frutaRemover'];
    if (($key = array_search($frutaARemover, $_SESSION['frutas'])) !== false) {
        unset($_SESSION['frutas'][$key]); // Remove a fruta do array.
        $_SESSION['frutas'] = array_values($_SESSION['frutas']); // Reindexa o array.
    }
}

// Exibindo o array atualizado com print_r.
echo "<p>Lista de frutas atualizada: </p>";
echo "<pre>";
print_r($_SESSION['frutas']);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Array com HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        input[type="text"], select {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        select {
            width: auto;
        }
        .lista-frutas {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Lista de Frutas</h1>

    <!-- Formulário para adicionar uma fruta -->
    <form method="post">
        <input type="text" name="fruta" id="fruta" required>
        <input type="hidden" name="acao" value="Adicionar">
        <input type="submit" value="Adicionar">
    </form>

    <!-- Formulário para remover uma fruta -->
    <form method="post">
        <select name="frutaRemover">
            <?php foreach ($_SESSION['frutas'] as $fruta): ?>
                <option value="<?php echo $fruta; ?>"><?php echo $fruta; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="hidden" name="acao" value="Remover">
        <input type="submit" value="Remover">
    </form>
</body>
</html>