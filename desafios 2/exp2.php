
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>
</head>

<body>
    <h1>Saudação</h1>
    <?php
            $nome = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") { //&& isset($_GET['peso'])
               $saudacao = $_POST['mensagem'];
             
            }
        ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="mensagem" required><br><br>
        <input type="submit" name="submit" value="apresentar">
    </form>


    <p><?php echo " ola " . $saudacao . " seja bem vindo! "; ?></p>
    
</body>

</html>