<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir aluno</title>
    
</head>
<body>
    
</body>
</html>
<?php

require_once "conexao.php";
require_once "functions.php";

// Recebe o ID pela URL.
$id_aluno = (int)($_GET["id"] ?? 0);

// Exclui o aluno.
if ($id_aluno > 0 && excluir_aluno($conexao, $id_aluno)) {

    header("Location: listar_alunos.php");
    exit;

} else {

    echo "Não foi possível excluir o aluno.";
}

?>