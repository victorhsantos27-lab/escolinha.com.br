<?php

require_once "conexao.php";
require_once "functions.php";

// Busca os professores.
$resultado = listar_professores($conexao);

?>

<h1>Professores cadastrados</h1>

<a href="gravar_professor.php">Cadastrar novo professor</a>

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

    <?php while ($professor = mysqli_fetch_assoc($resultado)) { ?>

    <tr>

        <td><?= $professor["id_professor"] ?></td>

        <td><?= htmlspecialchars($professor["nome"]) ?></td>

        <td><?= htmlspecialchars($professor["cpf"]) ?></td>

        <td><?= htmlspecialchars($professor["curso"]) ?></td>

        <td><?= htmlspecialchars($professor["login"]) ?></td>

        <td>
            <a href="editar_professor.php?id=<?= $professor["id_professor"] ?>">Editar</a>

            |

            <a href="excluir_professor.php?id=<?= $professor["id_professor"] ?>"
            onclick="return confirm('Deseja excluir este professor?')">
                Excluir
            </a>
        </td>

    </tr>

    <?php } ?>

</table>

<br>

<a href="index.php">Voltar ao início</a>