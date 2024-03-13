<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Código</title>
</head>
<style>
        * {
            font-family: Arial, Helvetica, sans-serif; 
        }
        body {
            background-color: #e6e6fa;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto; 
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="numero"] {
            width: calc(100% - 22px);
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            background-color: #9370DB;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #8a2be2;
        }

        p {
            font-size: 15px;
            max-width: 400px;
            margin: 20px auto; 
            
        }

</style>
<body>
    <h1>ATD III</h1>
    <!-- Cria um campo para que o usuário possa inserir o número. -->
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="numero" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        global $num; // para que a variavel possa ser usada durante todo o código.

        // Pega o valor que o usuario iseriu no formulário.
        $num = $_POST['numero'];
        
        // Condição se o número é par ou ímpar e pra cada condição uma exibe uma mensagem.
        if ($num % 2 == 0) {
            echo "<p> O número inserido é <strong>par.</strong></p>";
        } else {
            echo "<p>O número inserido é <strong>ímpar.</strong></p>";
        }

        // Condição se o número é redondo ou não e pra cada condição uma exibe uma mensagem.
        if ($num % 10 == 0) {
            echo "<p>O número inserido é <strong>redondo.</strong></p>";
        } else {
            echo "<p>O número inserido <strong>não é redondo.</strong></p>";
        }

        // Condição se o número é positivo, negativo ou neutro e pra cada condição uma exibe uma mensagem.
        if ($num > 0) {
            echo "<p>O número inserido é <strong>positivo.</strong></p>";
        } elseif ($num < 0) {
            echo "<p>O número inserido é <strong>negativo.</strong></p>";
        } else {
            echo "<p>O número inserido é <strong>neutro (zero).</strong></p>";
        }
    }
    ?>
</body>

</html>
