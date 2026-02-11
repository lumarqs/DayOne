<?php
require 'config.php';

$textoUsuario = $_POST['texto'] ?? '';

if (empty($textoUsuario)) {
    echo "Nenhum texto enviado.";
    exit;
}
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . GEMINI_API_KEY;


$dados = [
    "contents" => [
        [
            "role" => "user",
            "parts" => [
                [
                    "text" =>
                    "Você é um mentor para estagiários em início de carreira. 
                    Responda de forma acolhedora, clara e prática, sem termos complexos.
                    
                    Pergunta do estagiário:
                    " . $textoUsuario
                ]
            ]
        ]
    ]
];

$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => json_encode($dados)
]);

$resposta = curl_exec($ch);

if ($resposta === false) {
    echo "Erro ao conectar com a IA.";
    exit;
}

curl_close($ch);



$resultado = json_decode($resposta, true);

$textoIA =
    $resultado['candidates'][0]['content']['parts'][0]['text']
    ?? "Não foi possível gerar uma resposta no momento.";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resposta da IA • DayOne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>🤖 Resposta do DayOne</h1>
</header>

<main class="layout">
    <section class="card">
        <p><?= nl2br(htmlspecialchars($textoIA)) ?></p>
        <br>
        <a href="javascript:history.back()" class="btn secondary">← Voltar</a>
    </section>
</main>

</body>
</html>
