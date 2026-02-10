<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DayOne • Primeiro Dia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>🌅 Primeiro Dia</h1>
    <p>Respira. Você não precisa saber tudo hoje.</p>
</header>

<main class="layout">

    <section class="card">
        <h3>👥 Quem procurar</h3>
        <p>Identifique quem pode te ajudar em cada situação.</p>
    </section>

    <section class="card">
        <h3>🧭 O que focar hoje</h3>
        <ul>
            <li>Conhecer a equipe</li>
            <li>Entender ferramentas básicas</li>
            <li>Fazer perguntas</li>
        </ul>
    </section>

    <section class="card">
        <h3>❓ Tenho uma dúvida</h3>
        <form action="analisar.php" method="post">
            <textarea name="texto" placeholder="Descreva a situação..." required></textarea>
            <button type="submit">Analisar</button>
        </form>
    </section>

    <section class="card">
        <h3>💬 Dica importante</h3>
        <p>Errar no começo é esperado. Silenciar o erro não.</p>
    </section>

</main>

</body>
</html>
