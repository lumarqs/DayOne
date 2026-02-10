<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DayOne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>DayOne</h1>
    <p>Seu guia para os primeiros dias de trabalho</p>
</header>

<main class="layout">


    <section class="card">
        <h3>👥 Quem é quem</h3>

        <div class="person">
            <img src="https://i.pravatar.cc/100?img=12" alt="Ana Souza">
            <div>
                <strong>Ana Souza</strong>
                <span>RH</span>
                <small>Dúvidas administrativas</small>
            </div>
        </div>

        <div class="person">
            <img src="https://i.pravatar.cc/100?img=32" alt="Lucas Pereira">
            <div>
                <strong>Lucas Pereira</strong>
                <span>Líder Técnico</span>
                <small>Dúvidas técnicas</small>
            </div>
        </div>
    </section>


    <section class="card">
        <h3>🎯 Meu papel na empresa</h3>

        <p><strong>Primeira semana</strong></p>
        <ul>
            <li>Entender o funcionamento da empresa</li>
            <li>Conhecer as ferramentas básicas</li>
        </ul>

        <p><strong>Fazer</strong></p>
        <ul>
            <li>Observar processos</li>
            <li>Acompanhar tarefas do time</li>
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
        <h3>💬 Experiências de outros estagiários</h3>

        <div class="person">
            <img src="https://i.pravatar.cc/100?img=47" alt="Marina">
            <div>
                <strong>Marina</strong>
                <small>Perguntar cedo evita retrabalho.</small>
            </div>
        </div>

        <div class="person">
            <img src="https://i.pravatar.cc/100?img=18" alt="João">
            <div>
                <strong>João</strong>
                <small>Errar no começo é normal.</small>
            </div>
        </div>

        <div class="person">
            <img src="https://i.pravatar.cc/100?img=25" alt="Carla">
            <div>
                <strong>Carla</strong>
                <small>Anote tudo nos primeiros dias.</small>
            </div>
        </div>
    </section>

</main>

</body>
</html>
