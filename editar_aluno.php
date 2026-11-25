<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar aluno</title>
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
            text-align: center;
        }

        h1 {
            background-color: black;
            color: white;
            padding: 15px;
            margin-bottom: 40px;
        }

        form {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            width: 380px;
            padding: 30px;
            margin: 0 auto;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 9px;
            margin-bottom: 18px;
            border: 1px solid #999;
            border-radius: 5px;
        }

        button,
        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover,
        input[type="submit"]:hover {
            background-color: #444444;
        }

        a {
            display: inline-block;
            background-color: black;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        a:hover {
            background-color: #444444;
        }
    </style>
</head>

<body>

</body>

</html>

<?php

require_once "conexao.php";
require_once "functions.php";

// Recebe o ID pela URL.
$id_aluno = (int)($_GET["id"] ?? 0);

// Verifica se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $curso = trim($_POST["curso"]);
    $login = trim($_POST["login"]);
    $senha = $_POST["senha"];

    // Atualiza os dados.
    if (atualizar_aluno($conexao, $id_aluno, $nome, $cpf, $curso, $login, $senha)) {

        header("Location: listar_alunos.php");
        exit;
    } else {

        echo "Não foi possível atualizar.";
    }
}

// Busca os dados atuais.
$resultado = buscar_aluno($conexao, $id_aluno);

$aluno = mysqli_fetch_assoc($resultado);

if (!$aluno) {
    die("Aluno não encontrado.");
}

?>

<h1>Editar aluno</h1>

<form method="POST">

    Nome:
    <input name="nome"
        value="<?= htmlspecialchars($aluno["nome"]) ?>" required><br>

    CPF:
    <input name="cpf"
        placeholder="Digite novamente o CPF" required><br>

    Curso:
    <input name="curso"
        value="<?= htmlspecialchars($aluno["curso"]) ?>" required><br>

    Login:
    <input name="login"
        value="<?= htmlspecialchars($aluno["login"]) ?>" required><br>

    Nova senha:
    <input type="password" name="senha"><br>

    <small>Deixe a senha vazia para manter a senha atual.</small><br>

    <button type="submit">Salvar alterações</button>

</form>

<a href="listar_alunos.php">Voltar</a>