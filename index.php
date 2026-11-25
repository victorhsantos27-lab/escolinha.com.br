<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema Escolar</title>
    <style>
        html,
        body {
            margin: 0;
            min-height: 100%;
        }

        body {
            text-align: center;
            background-color: rgb(170, 219, 249);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h1 {
            background-color: black;
            color: white;
            height: 65px;
            text-align: center;
        }

        h2 {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: black;
            overflow: hidden;
            color: white;
        }

        * {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            margin-top: 190px;
            flex: 1;
        }

        .caixa {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            padding: 30px;
            text-align: center;
        }

        .caixa h2 {
            background-color: black;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }

        a:link {
            /*Link normal*/
            color: aqua;
            text-decoration: none;
        }

        a:visited {
            /*Link visitado*/
            color: blue;
        }

        a:hover {
            /*Link com mouse sobre ele*/
            color: blue;
            text-decoration: underline;
        }

        a:active {
            /*Link sendo clicado*/
            color: yellow;
        }

        .footer {
            background-color: #222222;
            color: #eeeeee;
            text-align: center;
            padding: 20px 15px;
            border-top: 2px solid #d1d1a8;
            flex-shrink: 0;
        }

        .footer p {
            margin: 6px 0;
            font-size: 15px;
        }

        .footer strong {
            color: #d1d1a8;
            font-weight: 500;
        }

        .footer span {
            display: block;
            margin-top: 12px;
            font-size: 12px;
            color: #aaaaaa;
        }
    </style>
</head>

<body>

    <h1>Sistema Escolar</h1>

    <div class="container">

        <section class="caixa">
            <h2>Alunos</h2>
            <a href="gravar_aluno.php">Gravar aluno</a> |
            <a href="listar_alunos.php">Listar alunos</a>
        </section>

        <section class="caixa">
            <h2>Professores</h2>
            <a href="gravar_professor.php">Gravar professor</a> |
            <a href="listar_professores.php">Listar professores</a>
        </section>
    </div>

    <footer class="footer">
        <p>Sistema Escolar</p>
        <p>Desenvolvido por <strong>Victor Hugo</strong> e <strong>Kauã Vinicius</strong></p>
        <span>© 2026 - Todos os direitos reservados.</span>
    </footer>

</body>

</html>