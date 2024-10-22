<?php
// Definição da classe Pessoa
class Pessoa {
    public $nome;
    public $idade;
    public $sexo;
    
    public function apresentar() {
        return "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos e sou do sexo {$this->sexo}.";
    }
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cria uma nova instância da classe Pessoa
    $pessoa = new Pessoa();
    $pessoa->nome = $_POST['nome'];
    $pessoa->idade = $_POST['idade'];
    $pessoa->sexo = $_POST['sexo'];
} else {
    // Se o formulário não foi enviado, inicializa a variável
    $pessoa = null;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto com HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        form {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        input[type="text"], input[type="number"], select {
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
    </style>
</head>
<body>
    <h1>Apresentação da Pessoa</h1>

    <!-- Formulário para entrada de dados -->
    <form method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="number" name="idade" placeholder="Idade" required>
        <select name="sexo" required>
            <option value="">Selecione o sexo</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
        <input type="submit" value="Apresentar">
    </form>

    <?php if ($pessoa): ?>
        <p><?php echo $pessoa->apresentar(); ?></p>
    <?php endif; ?>
</body>
</html>
