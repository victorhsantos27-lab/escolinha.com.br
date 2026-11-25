<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar alunos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: rgb(170, 219, 249);
            text-align: center;
        }

        h1 {
            background-color: black;
            color: white;
            padding: 15px;
            margin: 0;
        }

        table {
            background-color: white;
            margin: 30px auto;
            border-collapse: collapse;
            width: 80%;
        }

        th {
            background-color: black;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
            border: 1px solid black;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        /* Botões */
        .botao {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 20px 10px;
        }

        .botao:hover {
            background-color: #444444;
            color: white;
        }
    </style>
</head>

<body>

</body>

</html>
<?php

require_once "conexao.php";
require_once "functions.php";

// Busca os alunos.
$resultado = listar_alunos($conexao);

?>

<h1>Alunos cadastrados</h1>

<a href="gravar_aluno.php" class="botao">Cadastrar novo aluno</a>


<br><br>

<table border="1" cellpadding="8">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF (MD5)</th>
        <th>Curso</th>
        <th>Login</th>
        <th>Ações</th>
    </tr>

    <?php while ($aluno = mysqli_fetch_assoc($resultado)) { ?>

        <tr>

            <td><?= $aluno["id_aluno"] ?></td>

            <td><?= htmlspecialchars($aluno["nome"]) ?></td>

            <td><?= htmlspecialchars($aluno["cpf"]) ?></td>

            <td><?= htmlspecialchars($aluno["curso"]) ?></td>

            <td><?= htmlspecialchars($aluno["login"]) ?></td>

            <td>
                <a href="editar_aluno.php?id=<?= $aluno["id_aluno"] ?>">Editar</a>

                |

                <a href="excluir_aluno.php?id=<?= $aluno["id_aluno"] ?>"
                    onclick="return confirm('Deseja excluir este aluno?')">
                    Excluir
                </a>
            </td>

        </tr>

    <?php } ?>

</table>

<br>

<a href="index.php" class="botao">Voltar ao início</a>