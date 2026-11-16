
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nome"] = trim($_POST["nome"]);
    header("Location: quiz.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Quiz de Conhecimentos</h1>

    <p>Bem-vindo ao quiz!</p>
    <p>Digite seu nome para começar.</p>

    <form method="POST">
        <input type="text" name="nome"
        placeholder="Digite seu nome" required>

        <button type="submit">Começar Quiz</button>
    </form>

</div>

</body>
</html>
