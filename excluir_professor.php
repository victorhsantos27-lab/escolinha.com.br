<?php

require_once "conexao.php";
require_once "functions.php";

// Recebe o ID pela URL.
$id_professor = (int)($_GET["id"] ?? 0);

// Exclui o professor.
if ($id_professor > 0 && excluir_professor($conexao, $id_professor)) {

    header("Location: listar_professores.php");
    exit;

} else {

    echo "Não foi possível excluir o professor.";
}

?>