<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar aluno</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: rgb(170, 219, 249);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px;
            width: 100%;
            position: absolute;
            top: 0;
        }

        form {
            background-color: white;
            padding: 35px;
            border: 2px solid black;
            border-radius: 10px;
            width: 380px;
            margin-top: 60px;
        }

        label {
            font-size: 17px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 18px;
            border: 1px solid #999;
            border-radius: 5px;
            font-size: 15px;
        }

        button,
        input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover,
        input[type="submit"]:hover {
            background-color: #444444;
        }

        a {
            color: blue;
            text-decoration: none;
            display: block;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

</body>

</html>
<?php

require_once "conexao.php";
require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $curso = trim($_POST["curso"]);
    $login = trim($_POST["login"]);
    $senha = $_POST["senha"];

    if (gravar_aluno($conexao, $nome, $cpf, $curso, $login, $senha)) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar aluno. Verifique os dados.";
    }
}

?>

<h1>Cadastro de aluno</h1>

<form method="POST" enctype="multipart/form-data">

    Nome: <input type="text" name="nome" required><br><br>

    CPF: <input type="text" name="cpf" required><br><br>

    Curso: <input type="text" name="curso" required><br><br>

    Login: <input type="text" name="login" required><br><br>

    Senha: <input type="password" name="senha" required><br><br>
    <label>Foto:</label>

    <input type="file" name="foto"
        accept="image/jpeg,image/png,image/webp" required>

    <br><br>
    <button type="submit">Gravar aluno</button>

</form>

<a href="index.php">Voltar ao início</a>