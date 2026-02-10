<?php

$textoUsuario = strtolower($_POST["texto"] ?? "");

if (
    str_contains($textoUsuario, "erro") ||
    str_contains($textoUsuario, "prazo") ||
    str_contains($textoUsuario, "atraso")
) {
    $nivelRisco = "Alto";
    $orientacao = "É importante comunicar seu líder o quanto antes. Transparência nos primeiros dias é fundamental.";
}
elseif (
    str_contains($textoUsuario, "dúvida") ||
    str_contains($textoUsuario, "não entendi") ||
    str_contains($textoUsuario, "receio")
) {
    $nivelRisco = "Médio";
    $orientacao = "Buscar ajuda é esperado no início. Perguntar evita retrabalho e demonstra interesse.";
}
elseif (
    str_contains($textoUsuario, "arquivo") ||
    str_contains($textoUsuario, "processo") ||
    str_contains($textoUsuario, "procedimento")
) {
    $nivelRisco = "Baixo";
    $orientacao = "Tente consultar a documentação interna ou colegas próximos antes de escalar.";
}

$respostaIA = "
Nível de risco: $nivelRisco

Orientação:
$orientacao
";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DayOne • Análise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h2>🤖 Análise do DayOne</h2>
    <p><?= nl2br(htmlspecialchars($respostaIA)) ?></p>
    <a href="index.php">Voltar</a>
</div>

</body>
</html>
