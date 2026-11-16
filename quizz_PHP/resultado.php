
<?php
session_start();

if (!isset($_SESSION["nome"]) || $_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit;
}

$respostas = [
    "q1" => "a",
    "q2" => "b",
    "q3" => "c",
    "q4" => "a",
    "q5" => "a",
    "q6" => "b"
];

$acertos = 0;

foreach ($respostas as $pergunta => $correta) {
    if (isset($_POST[$pergunta]) && $_POST[$pergunta] == $correta) {
        $acertos++;
    }
}

$nome = $_SESSION["nome"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Resultado do Quiz</h1>

    <p>Participante:
        <strong><?php echo htmlspecialchars($nome); ?></strong>
    </p>

    <h2>Quantidade de acertos:</h2>

    <div class="resultado">
        <?php echo $acertos; ?> de 6 questões!
    </div>

    <p>
        <?php
        if ($acertos == 6) {
            echo "Parabéns! Você acertou todas!";
        } elseif ($acertos >= 3) {
            echo "Muito bem! Continue praticando!";
        } else {
            echo "Continue estudando e tente novamente!";
        }
        ?>
    </p>

    <a href="quiz.php">Voltar às perguntas</a>

    <a href="index.php">Voltar ao início</a>

</div>

</body>
</html>
