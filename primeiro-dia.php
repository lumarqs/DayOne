<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DayOne • Primeiro Dia</title>
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

if (mode === 'em-andamento') {
    window.location.href = 'em-andamento.php';
}
</script>

<header class="header">
    <h1>🌅 Primeiro Dia</h1>
    <h2>Olá, <script>document.write(localStorage.getItem('dayone_user'))</script> ☀️</h2>
    <p>Um passo de cada vez. Você não está atrasado.</p>
</header>

<main class="layout">

    <!-- GUIA PASSO A PASSO -->
    <section class="card">
        <h3>🧭 Guia do Primeiro Dia</h3>
        <ol class="guide">
            <li><strong>Chegada</strong><br>Confirme horários, acesso e quem será seu ponto de apoio.</li>
            <li><strong>Apresentação</strong><br>Conheça a equipe e entenda como cada área se conecta.</li>
            <li><strong>Ferramentas</strong><br>Tenha acesso às ferramentas principais (e-mail, sistemas, repositórios).</li>
            <li><strong>Expectativas</strong><br>Entenda o que esperam de você nesta primeira semana.</li>
            <li><strong>Anotações</strong><br>Anote tudo. Perguntas surgem depois.</li>
        </ol>
    </section>

    <section class="card">
    <h3>👥 Quem é quem</h3>
    <div id="quem-e-quem" class="grid-pessoas"></div>
</section>


    <!-- IA -->
    <section class="card">
        <h3>❓ Tenho uma dúvida agora</h3>
        <form action="analisar.php" method="post">
            <textarea name="texto" placeholder="Descreva a situação..." required></textarea>
            <button type="submit">Analisar</button>
        </form>
    </section>
    
    <section class="card">
    <h3>📈 Minha evolução</h3>
    <p>O DayOne reduz o suporte conforme você ganha segurança.</p>
    <p>Autonomia não é saber tudo, é saber decidir.</p>

    <button onclick="
    localStorage.setItem('dayone_mode','em-andamento');
    window.location.href='em-andamento.php';
">
Quero tentar com mais autonomia
</button>

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
<script>
const start = localStorage.getItem('dayone_start');
const days = (Date.now() - start) / (1000 * 60 * 60 * 24);

if (days >= 3 && !localStorage.getItem('dayone_prompted')) {
    const evolve = confirm(
        "Você já passou dos primeiros dias.\n\nQuer tentar o modo mais autônomo do DayOne?"
    );

    if (evolve) {
        localStorage.setItem('dayone_mode', 'em-andamento');
        window.location.href = 'em-andamento.php';
    }

    localStorage.setItem('dayone_prompted', 'true');
}
</script>
<!-- Quem é quem -->
<script>
const pessoas = [
    { nome: "Ana", cargo: "Estagiária Front-end", foto: "img/ana.jpg" },
    { nome: "Lucas", cargo: "Estagiário Back-end", foto: "img/lucas.jpg" },
    { nome: "Marina", cargo: "UX Designer", foto: "img/marina.jpg" },
    { nome: "João", cargo: "QA", foto: "img/joao.jpg" },
    { nome: "Beatriz", cargo: "Produto", foto: "img/bea.jpg" },
    { nome: "Rafael", cargo: "Dados", foto: "img/rafael.jpg" }
];

const container = document.getElementById("quem-e-quem");

pessoas.forEach(p => {
    container.innerHTML += `
        <div class="pessoa">
            <img src="${p.foto}" alt="${p.nome}">
            <div class="pessoa-info">
                <strong>${p.nome}</strong>
                <span>${p.cargo}</span>
            </div>
        </div>
    `;
});
</script>

</body>


</body>
</html>
