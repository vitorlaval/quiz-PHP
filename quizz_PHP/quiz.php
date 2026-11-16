
<?php
session_start();

if (!isset($_SESSION["nome"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perguntas do Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Quiz PHP</h1>

    <p>Participante: <?php echo htmlspecialchars($_SESSION["nome"]); ?></p>

    <form action="resultado.php" method="POST">

        <h2>1) O que é PHP?</h2>
        <label><input type="radio" name="q1" value="a" required> Linguagem de programação</label>
        <label><input type="radio" name="q1" value="b"> Navegador</label>
        <label><input type="radio" name="q1" value="c"> Sistema operacional</label>

        <h2>2) Qual é a extensão de um arquivo PHP?</h2>
        <label><input type="radio" name="q2" value="a" required> .html</label>
        <label><input type="radio" name="q2" value="b"> .php</label>
        <label><input type="radio" name="q2" value="c"> .css</label>

        <h2>3) Qual comando mostra algo na tela em PHP?</h2>
        <label><input type="radio" name="q3" value="a" required> display</label>
        <label><input type="radio" name="q3" value="b"> printScreen</label>
        <label><input type="radio" name="q3" value="c"> echo</label>

        <h2>4) Como declarar uma variável em PHP?</h2>
        <label><input type="radio" name="q4" value="a" required> $nome</label>
        <label><input type="radio" name="q4" value="b"> #nome</label>
        <label><input type="radio" name="q4" value="c"> @nome</label>

        <h2>5) Qual comando cria uma função?</h2>
        <label><input type="radio" name="q5" value="a" required> function</label>
        <label><input type="radio" name="q5" value="b"> create</label>
        <label><input type="radio" name="q5" value="c"> def</label>

        <h2>6) Qual comando retorna um valor de uma função?</h2>
        <label><input type="radio" name="q6" value="a" required> echo</label>
        <label><input type="radio" name="q6" value="b"> return</label>
        <label><input type="radio" name="q6" value="c"> print</label>

        <button type="submit">Finalizar Quiz</button>

    </form>

</div>

</body>
</html>
