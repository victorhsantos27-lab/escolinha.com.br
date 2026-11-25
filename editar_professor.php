<?php

require_once "conexao.php";
require_once "functions.php";

// Recebe o ID pela URL.
$id_professor = (int)($_GET["id"] ?? 0);

// Verifica se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $cpf = trim($_POST["cpf"]);
    $curso = trim($_POST["curso"]);
    $login = trim($_POST["login"]);
    $senha = $_POST["senha"];

    // Atualiza os dados do professor.
    if (atualizar_professor($conexao, $id_professor, $nome, $cpf, $curso, $login, $senha)) {

        header("Location: listar_professores.php");
        exit;

    } else {

        echo "Não foi possível atualizar.";
    }
}

// Busca os dados atuais.
$resultado = buscar_professor($conexao, $id_professor);

$professor = mysqli_fetch_assoc($resultado);

if (!$professor) {
    die("Professor não encontrado.");
}

?>

<h1>Editar professor</h1>

<form method="POST">

    Nome:
    <input name="nome"
    value="<?= htmlspecialchars($professor["nome"]) ?>" required><br>

    CPF:
    <input name="cpf"
    placeholder="Digite novamente o CPF" required><br>

    Curso:
    <input name="curso"
    value="<?= htmlspecialchars($professor["curso"]) ?>" required><br>

    Login:
    <input name="login"
    value="<?= htmlspecialchars($professor["login"]) ?>" required><br>

    Nova senha:
    <input type="password" name="senha"><br>

    <small>Deixe a senha vazia para manter a senha atual.</small><br>

    <button type="submit">Salvar alterações</button>

</form>

<a href="listar_professores.php">Voltar</a>