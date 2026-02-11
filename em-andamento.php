<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DayOne • Em Andamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <script>
if (!localStorage.getItem('dayone_user')) {
    window.location.href = 'login.php';
}
</script>

<script>
const mode = localStorage.getItem('dayone_mode');

if (mode === 'primeiro-dia') {
    window.location.href = 'primeiro-dia.php';
}
</script>

<header class="header">
    <h1>🚀 Em Andamento</h1>
    <h2>Olá, <script>document.write(localStorage.getItem('dayone_user'))</script> ☀️</h2>
    <p>Agora o foco é autonomia e tomada de decisão.</p>
</header>

<main class="layout">

    <!-- REFLEXÃO -->
    <section class="card">
        <h3>🎯 Antes de pedir ajuda</h3>
        <ul>
            <li>Já tentei resolver sozinho?</li>
            <li>Consultei documentação ou colegas?</li>
            <li>Entendo o impacto do problema?</li>
        </ul>
    </section>

    <!-- EVOLUÇÃO -->
    <section class="card">
        <h3>📈 Minha evolução</h3>
        <p>O DayOne reduz o suporte conforme você ganha segurança.</p>
        <p>Autonomia não é saber tudo, é saber decidir.</p>

        <button onclick="
    localStorage.setItem('dayone_mode','primeiro-dia');
    window.location.href='primeiro-dia.php';
">
Quero mais orientação
</button>

    </section>

    <!-- IA -->
    <section class="card">
        <h3>❓ Ainda tenho uma dúvida</h3>
        <form action="analisar.php" method="post">
            <textarea name="texto" placeholder="Explique a situação..." required></textarea>
            <button type="submit">Analisar</button>
        </form>
    </section>

    <section class="card">
    <h3>🤝 Dicas da comunidade de estagiários</h3>

    <div id="community">

        <!-- GRUPO 1 -->
        <div class="community-group active">
            <div class="person">
                <img src="https://i.pravatar.cc/100?img=47">
                <div>
                    <strong>Marina</strong>
                    <small>No primeiro dia, observe mais do que fale.</small>
                </div>
            </div>

            <div class="person">
                <img src="https://i.pravatar.cc/100?img=18">
                <div>
                    <strong>João</strong>
                    <small>Perguntar cedo evita retrabalho depois.</small>
                </div>
            </div>

            <div class="person">
                <img src="https://i.pravatar.cc/100?img=25">
                <div>
                    <strong>Carla</strong>
                    <small>Anote nomes, cargos e processos.</small>
                </div>
            </div>
        </div>

        <!-- GRUPO 2 -->
        <div class="community-group">
            <div class="person">
                <img src="https://i.pravatar.cc/100?img=52">
                <div>
                    <strong>Pedro</strong>
                    <small>Ninguém espera perfeição no começo.</small>
                </div>
            </div>

            <div class="person">
                <img src="https://i.pravatar.cc/100?img=33">
                <div>
                    <strong>Luana</strong>
                    <small>Entender o problema vale mais que responder rápido.</small>
                </div>
            </div>

            <div class="person">
                <img src="https://i.pravatar.cc/100?img=41">
                <div>
                    <strong>Rafael</strong>
                    <small>Erro é parte do aprendizado, não do fracasso.</small>
                </div>
            </div>
        </div>

        <!-- GRUPO 3 -->
        <div class="community-group">
            <div class="person">
                <img src="https://i.pravatar.cc/100?img=14">
                <div>
                    <strong>Amanda</strong>
                    <small>Se travar, explique o que tentou antes.</small>
                </div>
            </div>

            <div class="person">
                <img src="https://i.pravatar.cc/100?img=9">
                <div>
                    <strong>Diego</strong>
                    <small>Documentação é sua melhor amiga.</small>
                </div>
            </div>

            <div class="person">
                <img src="https://i.pravatar.cc/100?img=29">
                <div>
                    <strong>Beatriz</strong>
                    <small>Todo mundo já foi iniciante um dia.</small>
                </div>
            </div>
        </div>

    </div>
</section>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const groups = document.querySelectorAll('#community .community-group');
    let current = 0;

    groups.forEach((group, index) => {
        group.classList.toggle('active', index === 0);
    });

    setInterval(() => {
        groups[current].classList.remove('active');
        current = (current + 1) % groups.length;
        groups[current].classList.add('active');
    }, 15000);
});
</script>
<script>
if (!localStorage.getItem('dayone_start')) {
    localStorage.setItem('dayone_start', Date.now());
}

if (!localStorage.getItem('dayone_mode')) {
    localStorage.setItem('dayone_mode', 'primeiro-dia');
}
</script>


</body>
</html>
